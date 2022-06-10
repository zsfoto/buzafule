<?php
App::uses('AppController', 'Controller');
class MessagesController extends AppController {
	public $components = array( 'Paginator', 'Session', 'Auth', 'Email' );
	public $uses = array('Message', 'About','Text');
	
    public function beforeFilter(){
        parent::beforeFilter();
		$this->Auth->allow('composemessage');
    }

	public function composemessage() {
		$this->autoRender = false;
		Configure::write('debug', 2); //it will avoid any extra output
		$success	= FALSE;
		$type		= 'Error';
		$message	= 'Nem sikerült az üzenet mentése!<br />Kérem nézze át az adatokat és próbálja ismét.';
		
		$m['Message']['name'] 		= $this->request->data['Message']['name'];
		$m['Message']['email'] 		= $this->request->data['Message']['email'];
		$m['Message']['phone'] 		= $this->request->data['Message']['phone'];
		$m['Message']['message'] 	= $this->request->data['Message']['message'];
		$m['Message']['readed'] 	= 0;
		
		$this->Message->create();
		if ($this->Message->save( $m )) {
			$success 	= TRUE;
			$type		= 'Success';

			$about = $this->About->findById( 1 );
			
			$company_email = $about['About']['company_email'];
			$company_name = $about['About']['company_name'];
			$message_subject = $about['About']['email_message_subject'];
			
			$email = new CakeEmail('default');
			$email->emailFormat('html');
			$email->template('default', 'message_confirm') ;	//ua mint az order_confirm
			$email->from(array($company_email => $company_name));		
			$email->subject( $message_subject );
			
			//$email->viewVars(array('c' => $o));	//Lehet nem is kell, majd megnézem
			$email->viewVars(array('about' => $about));
			
			if( $m['Message']['email'] != '' ){	//Itt most nem ellenőrzöm az email helyességét. Ha jó, akkor jó, ha nem, akkor nem...
				$email->to( $m['Message']['email'] );
			}

			$text = $this->Text->findById(13);	// Kapcsolati üzenet visszaigazolása

			// {neve}, {email}, {telefon}, {uzenet}
			//$megszolitas = $about['About']['email_message_title'];
			$megszolitas = $text['Text']['subject'];
			$megszolitas = ereg_replace( "{neve}", 		$m['Message']['name'], 		$megszolitas );
			$megszolitas = ereg_replace( "{telefon}", 	$m['Message']['phone'],		$megszolitas );
			$megszolitas = ereg_replace( "{email}", 	$m['Message']['email'],		$megszolitas );
			$megszolitas = ereg_replace( "{uzenet}",	$m['Message']['message'], 	$megszolitas );
			$email->viewVars(array('megszolitas' => $megszolitas));
			
			$m['Message']['name'] 		= $this->request->data['Message']['name'];
			$m['Message']['email'] 		= $this->request->data['Message']['email'];
			$m['Message']['phone'] 		= $this->request->data['Message']['phone'];
			$m['Message']['message'] 	= $this->request->data['Message']['message'];
			
			// {neve}, {email}, {telefon}, {uzenet}
			//$message_email = $about['About']['email_message'];
			$message_email = $text['Text']['text'];
			$message_email = ereg_replace("{neve}", 	"<b>".$m['Message']['name']."</b>", 	$message_email);
			$message_email = ereg_replace("{telefon}", 	"<b>".$m['Message']['phone']."</b>", 	$message_email);
			$message_email = ereg_replace("{email}", 	"<b>".$m['Message']['email']."</b>", 	$message_email);
			$message_email = ereg_replace("{uzenet}", 	"<b>".$m['Message']['message']."</b>", 	$message_email);
			
			$message_email = ereg_replace("\n", "<br />\n", $message_email);

			//debug($message_email); die();
			
			$email->send( $message_email );

			// echo json_encode(array(
				// 'success'	=> $success,
				// 'flashType'	=> $type,
				// 'message'	=> $message_email
			// ));			
			// die();

			$email->to( $about['About']['company_email'] );
			$email->subject( $message_subject." - (másolat)" );
			$email->send( $message_email );

			//$message	= '<b>Üzenetét megkaptuk</b>!<br />Ügyintézőnk mielőbb felveszi önnel a kapcsolatot.<br /><b>Köszönjük</b>';
			$message	= 'Üzenetét megkaptuk! Ügyintézőnk mielőbb felveszi önnel a kapcsolatot. Köszönjük';
		} else {
			//$message	= '<b>Üzenetét NEM kaptuk meg.</b>!<br />Kérem próbálja újra elküldeni és/vagy nézze át az adatokat!<br />Ha ekkor sem megy, akkor valószínű szerver hiba lépett fel és később próbálja elküldeni.<br /><b>Megértését köszönjük</b>';
			$message	= 'Üzenetét NEM kaptuk meg.! Kérem próbálja újra elküldeni és/vagy nézze át az adatokat! Ha ekkor sem megy, akkor valószínű szerver hiba lépett fel és később próbálja elküldeni. Megértését köszönjük!';
		}
		
		echo json_encode(array(
			'success'	=> $success,
			'flashType'	=> $type,
			'message'	=> $message
		));
		
	}

	public function admin_add() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ($this->request->is('post')) {
			$this->Message->create();
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Nem sikerült a mentés.'));
			}
		}
	}
	
	public function admin_readed($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Nincs ilyen üzenet'));
		}
		$this->Message->id = $id;
		if( $this->Message->saveField('readed',1) ){
			$this->Session->setFlash(__('Olvasva'));
			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('Nem sikerült menteni. Nézze át az adatokat és próbálja meg újra!'));
		}
	}
	
	public function admin_index() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Message->recursive = -1;
		$this->paginate = array( 
			'Message' => array(
				// 'limit' => 20,
				'order'=> array(
					'Message.readed'=>'asc',
					'Message.id'=>'desc'
				)
			)
		);		
		$this->set('messages', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Nincs ilyen üzenet'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));
	}

	public function admin_edit($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Nincs ilyen üzenet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Nicns iylen üzenet'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('Törölve: Ok!'));
		} else {
			$this->Session->setFlash(__('Törlés: NEM Ok!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
}
	
?>