<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
class OrdersController extends AppController {
	public $components = array( 'Paginator', 'Session', 'Auth', 'Email' );
	public $uses = array('Order','About', 'Price', 'Text','CashOnDelivery');

    public function beforeFilter(){
        parent::beforeFilter();
		$this->Auth->allow('neworder');
		//if ($this->Auth->loggedIn()) {
			//Configure::write('debug', 2);
		//}

    }

	public function neworder() {
		$this->autoRender = false;
		Configure::write('debug', 2); //it will avoid any extra output
		$success	= FALSE;
		$type		= 'Error';
		$message	= 'Nem sikerült az üzenet mentése! Kérem nézze át az adatokat és próbálja ismét.';

		$o['Order']['name'] 		= $this->request->data['Order']['name'];
		$o['Order']['phone'] 		= $this->request->data['Order']['phone'];
		$o['Order']['email'] 		= $this->request->data['Order']['email'];
		$o['Order']['postcode'] 	= $this->request->data['Order']['postcode'];
		$o['Order']['city']		 	= $this->request->data['Order']['city'];
		$o['Order']['address']	 	= $this->request->data['Order']['address'];
		$o['Order']['message'] 		= $this->request->data['Order']['message'];
		$o['Order']['quantity']		= $this->request->data['Order']['quantity'];
		$o['Order']['payment_type']	= $this->request->data['Order']['payment_type'];
		$o['Order']['delivered']	= 0;

		$about = $this->About->findById(1);

		$value = $this->Price->findByQuantity( $o['Order']['quantity'] );

		$o['Order']['value'] 		 = $value['Price']['price'];
		$o['Order']['discount'] 	 = $value['Price']['discount'];
		$o['Order']['deliveryprice'] = $value['Price']['delivery_price'];

		$o['Order']['totalvalue'] 	 = $o['Order']['value'] + $o['Order']['deliveryprice'];
		
		//------------- Utánvét -------------------
		if($o['Order']['payment_type'] == 1){	// Utánvét; 2 == Átutalás
			$this->CashOnDelivery->recursive = -1;
			$cashOnDelivery = $this->CashOnDelivery->find('first', 
				array(
					'conditions'=>array(
						'price_from <= ' => $o['Order']['totalvalue'],
						'price_to >= '	 => $o['Order']['totalvalue']
					),
					//'order' =>array(
					//	'CashOnDelivery.price_from' => 'asc',
					//	'CashOnDelivery.price_to' => 'asc'
					//)
				)
			);
			
			if(!empty($cashOnDelivery)){
				$success = true;
				$o['Order']['payment_amount'] = $cashOnDelivery['CashOnDelivery']['cashOnDelivery'];
				$o['Order']['totalvalue'] += $o['Order']['payment_amount'];
			}else{
				$o['Order']['payment_amount'] = $o['Order']['totalvalue'] * ($about['About']['cash_on_delivery_percent']/100);
				$o['Order']['totalvalue'] += $o['Order']['payment_amount'];
			}
			
		}else{
			$o['Order']['payment_amount'] = 0;
			
		}
		//----------- /.Utánvét -------------------

		$this->Order->create();
		if ($this->Order->save( $o )) {
			$success 	= TRUE;
			$type		= 'Success';
			$egysegar 	= 0;
			$ertek 		= 0;
			
			$lastInsertId = $this->Order->id;

			$company_email = $about['About']['company_email'];
			$company_name = $about['About']['company_name'];

			if($o['Order']['payment_type'] == 1){
				$text = $this->Text->findById(11);	// Utánvét
			}
			if($o['Order']['payment_type'] == 2){
				$text = $this->Text->findById(10);	// Előre utalás
			}
			
			//$confirm_subject = $about['About']['email_confirm_subject'];
			$confirm_subject = $text['Text']['subject'];

			// $egysegar 	= $about['About']['price'];

			$email = new CakeEmail('default');
			$email->emailFormat('html');
			$email->template('default', 'order_confirm') ;
			$email->from(array($company_email => $company_name));
			$email->subject( $confirm_subject );
			$email->to( $o['Order']['email'] );

			// $email->send();
			$email->viewVars(array('c' => $o));
			$email->viewVars(array('about' => $about));

			// $ertek = $egysegar * $o['Order']['quantity'];

			// {neve}, {email}, {telefon}, {irszam}, {telepules}, {utca}, {mennyiseg}, {megjegyzes}
			//$megszolitas = $about['About']['email_confirm_title'];
			
			$megszolitas = $text['Text']['subject'];
			
			$megszolitas = ereg_replace( "{megrszam}",	$lastInsertId,	 			$megszolitas );
			$megszolitas = ereg_replace( "{neve}", 		$o['Order']['name'], 		$megszolitas );
			$megszolitas = ereg_replace( "{telefon}", 	$o['Order']['phone'], 		$megszolitas );
			$megszolitas = ereg_replace( "{email}", 	$o['Order']['email'], 		$megszolitas );
			$megszolitas = ereg_replace( "{irszam}", 	$o['Order']['postcode'], 	$megszolitas );
			$megszolitas = ereg_replace( "{telepules}", $o['Order']['city'], 		$megszolitas );
			$megszolitas = ereg_replace( "{utca}", 		$o['Order']['address'], 	$megszolitas );
			$megszolitas = ereg_replace( "{megjegyzes}",$o['Order']['message'], 	$megszolitas );
			// $megszolitas = ereg_replace( "{egysegar}",	$egysegar,				 	$megszolitas );
			$megszolitas = ereg_replace( "{ertek}",		$o['Order']['value'],	 	$megszolitas );
			$megszolitas = ereg_replace( "{megtakaritas}",$o['Order']['discount'],	$megszolitas );
			$megszolitas = ereg_replace( "{mennyiseg}", $o['Order']['quantity'], 	$megszolitas );
			$megszolitas = ereg_replace( "{utanvet}", 	$o['Order']['payment_amount'],$megszolitas );	// ÚJ
			//$megszolitas = ereg_replace( "{postakoltseg}", $o['Order']['deliveryprice'],$megszolitas );
			$megszolitas = ereg_replace( "{fizetendo}", $o['Order']['totalvalue'], 	$megszolitas );

			//$email->viewVars(array('megszolitas' => $megszolitas));

			// {neve}, {email}, {telefon}, {irszam}, {telepules}, {utca}, {mennyiseg}, {megjegyzes}
			//$confirm_email = $about['About']['email_confirm'];
			
			$confirm_email = $text['Text']['text'];
			$confirm_email = ereg_replace("{megrszam}",		"<b>".$lastInsertId."</b>",				$confirm_email );
			$confirm_email = ereg_replace("{neve}", 		"<b>".$o['Order']['name']."</b>", 		$confirm_email);
			$confirm_email = ereg_replace("{telefon}", 		"<b>".$o['Order']['phone']."</b>", 		$confirm_email);
			$confirm_email = ereg_replace("{email}", 		"<b>".$o['Order']['email']."</b>", 		$confirm_email);
			$confirm_email = ereg_replace("{irszam}", 		"<b>".$o['Order']['postcode']."</b>", 	$confirm_email);
			$confirm_email = ereg_replace("{telepules}", 	"<b>".$o['Order']['city']."</b>", 		$confirm_email);
			$confirm_email = ereg_replace("{utca}", 		"<b>".$o['Order']['address']."</b>", 	$confirm_email);
			$confirm_email = ereg_replace("{megjegyzes}", 	"<b>".$o['Order']['message']."</b>", 	$confirm_email);
			// $confirm_email = ereg_replace("{egysegar}", 	"<b>".$egysegar."</b>", 				$confirm_email);
			$confirm_email = ereg_replace("{ertek}", 		"<b>".$o['Order']['value']."</b>",		$confirm_email);
			$confirm_email = ereg_replace("{megtakaritas}", "<b>".$o['Order']['discount']."</b>",	$confirm_email);

			$confirm_email = ereg_replace("{url}", "<a href=\"http://".$_SERVER['SERVER_NAME']."\">http://".$_SERVER['SERVER_NAME']."</a>", $confirm_email);

			$confirm_email = ereg_replace("{mennyiseg}", 	'<b style="font-size: 20px; color: green;\ font-weight: bold;">'.$o['Order']['quantity']."</b>", 	$confirm_email);
			$confirm_email = ereg_replace("{postakoltseg}",	"<b>".$o['Order']['deliveryprice']."</b>",$confirm_email);
			$confirm_email = ereg_replace("{utanvet}", 		"<b>".$o['Order']['payment_amount']."</b>",$confirm_email);
			$confirm_email = ereg_replace("{fizetendo}",	"<b>".$o['Order']['totalvalue']."</b>",$confirm_email);

			$confirm_email = ereg_replace("\n", "<br />\n", $confirm_email);

			if($email->send( $confirm_email )){
				//$message	= '<b>Köszönjük megrendelését</b>!<br />Visszaigazoló Email-t kiküldtük a megadott<br /><b>'.$o['Order']['email'].'</b><br />címre.<br /><b>Kérem nézze meg a LEVÉLSZEMÉT mappát is, ha nem találná a visszaigazoló emailt.</b><br />Köszönöm!';
				$message	= 'Köszönjük! Megrendelését megkaptuk! Visszaigazoló Email-t kiküldtük a megadott: '.$o['Order']['email'].' címre. Kérem nézze meg a LEVÉLSZEMÉT mappát is, ha nem találná a visszaigazoló emailt. Köszönöm!';
			} else {
				//$message	= '<b>Köszönjük megrendelését</b>!<br />NEM SIKERÜLT<br />Visszaigazoló Email-t kiküldeni.';
				$message	= 'Köszönjük! Megrendelését megkaptuk! NEM SIKERÜLT Visszaigazoló Email-t kiküldeni. Köszönjük!';
			}

			$email->to( $about['About']['company_email'] );
			$email->subject( $confirm_subject." - (másolat)" );
			$email->send( $confirm_email );

		} // /save record

		echo json_encode(array(
			'success'	=> $success,
			'flashType'	=> $type,
			'message'	=> $message
		));

	}


	// Esedékes email-ek kiküldése
	public function admin_dueemail() {
		Configure::write('debug', 2);
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$about = $this->About->findById( 1 );
		$text = $this->Text->findById(6);	// Esedékes e-mail: 6
		$today = date('Y-m-d');
		$this->Order->recursive = -1;
		$conditions = array('Order.due_date <=' => $today, 'Order.due_date !=' => '0000-00-00' , 'Order.sent_email' => 0);	//Akiknek esedékes az Emailt kiküldeni és még nem volt kiküldve
		$dueorders = $this->Order->find('all', array('conditions'=>$conditions) );
		foreach($dueorders as $dueorder){
			$email = new CakeEmail('default');
			$email->emailFormat('html');
			$email->template('default', 'default') ;
			$email->from(array($about['About']['company_email'] => $about['About']['company_name']));
			$email->subject( $text['Text']['subject'] );
			$email->to( $dueorder['Order']['email'] );

			$emailbody = $text['Text']['text'];

			// Labels: {neve}, {megrendeles_datum}, {adag}, {link}
			$emailbody = ereg_replace("{neve}", $dueorder['Order']['name'], $emailbody);
			$emailbody = ereg_replace("{megrendeles_datum}", substr(ereg_replace("-",".",$dueorder['Order']['created']),0,10), $emailbody);
			$emailbody = ereg_replace("{adag}", $dueorder['Order']['quantity'], $emailbody);
			$link = '<a href="http://'.$_SERVER['HTTP_HOST'].'/re/'.$dueorder['Order']['id'].'/'.$dueorder['Order']['uuid'].'">'.$_SERVER['HTTP_HOST'].'</a>';
			$emailbody = ereg_replace("{link}", $link, $emailbody);

			// $email->viewVars(array('about' => $about));
			$this->Order->id = $dueorder['Order']['id'];
			if( $email->send($emailbody) ){
				$this->Order->saveField( 'sent_email', 1 );
			}else{
				$this->Order->saveField( 'sent_email', 0 );
			}

			$email->reset();

		}	//foreach $dueorders

		return $this->redirect('/admin/orders/dueindex');
	}

	public function admin_dueindex() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Order->recursive = -1;
		$today = date('Y-m-d');
		$conditions = array('Order.due_date <=' => $today, 'Order.sent_email' => 0, 'Order.due_date !=' => '0000-00-00' );
		$this->paginate = array(
			'Order' => array(
				// 'limit' => 20,
				'conditions' => $conditions,
				'order'=> array(
					// 'Order.delivered'=>'asc',
					'Order.id'=>'desc'
				)
			)
		);
		$this->set('orders', $this->Paginator->paginate());
	}


	public function admin_editduedate( $id = null ) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Order->exists($id)) {
			return $this->redirect('/admin');
		}

		if ($this->request->is(array('post', 'put'))) {
			$order = $this->Order->findById( $id );
			if( $order['Order']['uuid'] == '' ){	//Ha nincs még uuid, akkor legyen
				$this->request->data['Order']['uuid'] = string::uuid();
			}
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				// return $this->redirect(array('action' => 'view', $id ));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}

		$order = $this->request->data;
		$created = strtotime($order['Order']['created']);
		$days = $order['Order']['quantity'] * 28;
		$due = $created + ($days * 24 * 60 * 60);
		$duedate = date('Y.m.d', $due);
		$created = date('Y.m.d', $created);
		$this->set('created',ereg_replace("-", ".", $created));
		$this->set('days',ereg_replace("-", ".", $days));
		$this->set('duedate',ereg_replace("-", ".", $duedate));

		// $ordered_date = strtotime( substr($order['Order']['created'],0,10) );
		// $due_date = strtotime($order['Order']['due_date']);
		// $days = ($due_date - $ordered_date) ;
		// $days =  (integer) ($days / 86400);
		// echo $days;
		//date('Y-m-d', strtotime('-12 days'));
	}


	public function admin_delivered($id = null) {
		$egysegar 	= 0;
		$ertek 		= 0;
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Érvénytelen megrendelés'));
		}
		$this->Order->id = $id;
		if ($this->Order->saveField('delivered',1)) {
			$o = $this->Order->findById( $id );
			if( isset($o) ){
				$about = $this->About->findById(1);
				$company_email = $about['About']['company_email'];
				$company_name = $about['About']['company_name'];
				
				//$shiping_subject = $about['About']['email_shiping_subject'];				
				$text = $this->Text->findById(12);	// Megrendelés postára adva v. futárnak
				$shiping_subject = $text['Text']['subject'];
				
				// $egysegar = $about['About']['price'];

				$email = new CakeEmail('default');
				$email->emailFormat('html');
				$email->template('default', 'shiping_confirm') ;	//ua mint az order_confirm
				$email->from(array($company_email => $company_name));
				$email->subject( $shiping_subject );
				$email->to( $o['Order']['email'] );

				// $email->send();
				$email->viewVars(array('c' => $o));	//Lehet nem is kell, majd megnézem
				$email->viewVars(array('about' => $about));


				// {neve}, {email}, {telefon}, {irszam}, {telepules}, {utca}, {mennyiseg}, {megjegyzes}, {ertek}
				//$megszolitas = $about['About']['email_confirm_title'];
				
				$megszolitas = $text['Text']['subject'];
				
				$megszolitas = ereg_replace( "{neve}", 		$o['Order']['name'], 		$megszolitas );
				$megszolitas = ereg_replace( "{telefon}", 	$o['Order']['phone'], 		$megszolitas );
				$megszolitas = ereg_replace( "{email}", 	$o['Order']['email'], 		$megszolitas );
				$megszolitas = ereg_replace( "{irszam}", 	$o['Order']['postcode'], 	$megszolitas );
				$megszolitas = ereg_replace( "{telepules}", $o['Order']['city'], 		$megszolitas );
				$megszolitas = ereg_replace( "{utca}", 		$o['Order']['address'], 	$megszolitas );
				$megszolitas = ereg_replace( "{megjegyzes}",$o['Order']['message'], 	$megszolitas );
				// $megszolitas = ereg_replace( "{egysegar}",	$o['Order']['price'],	 	$megszolitas );
				$megszolitas = ereg_replace( "{ertek}",		$o['Order']['value'],	 	$megszolitas );
				$megszolitas = ereg_replace( "{megtakaritas}",$o['Order']['discount'], 	$megszolitas );
				$megszolitas = ereg_replace( "{mennyiseg}", $o['Order']['quantity'], 	$megszolitas );
				$megszolitas = ereg_replace( "{postakoltseg}", $o['Order']['deliveryprice'], $megszolitas );
				$megszolitas = ereg_replace( "{utanvet}", 	$o['Order']['payment_amount'],$megszolitas );
				$megszolitas = ereg_replace( "{fizetendo}", $o['Order']['totalvalue'], 	$megszolitas );
				$email->viewVars(array('megszolitas' => $megszolitas));

				$megszolitas = $text['Text']['text'];
				
				// {neve}, {email}, {telefon}, {irszam}, {telepules}, {utca}, {mennyiseg}, {megjegyzes}, {egysegar}, {ertek
				//$shiping_email = $about['About']['email_shiping'];
				$shiping_email = $text['Text']['text'];
				$shiping_email = ereg_replace("{neve}", 		"<b>".$o['Order']['name']."</b>", 		$shiping_email);
				$shiping_email = ereg_replace("{telefon}", 		"<b>".$o['Order']['phone']."</b>", 		$shiping_email);
				$shiping_email = ereg_replace("{email}", 		"<b>".$o['Order']['email']."</b>", 		$shiping_email);
				$shiping_email = ereg_replace("{irszam}", 		"<b>".$o['Order']['postcode']."</b>", 	$shiping_email);
				$shiping_email = ereg_replace("{telepules}", 	"<b>".$o['Order']['city']."</b>", 		$shiping_email);
				$shiping_email = ereg_replace("{utca}", 		"<b>".$o['Order']['address']."</b>", 	$shiping_email);
				$shiping_email = ereg_replace("{megjegyzes}", 	"<b>".$o['Order']['message']."</b>", 	$shiping_email);
				// $shiping_email = ereg_replace("{egysegar}", 	"<b>".$o['Order']['price']."</b>",	 	$shiping_email);
				$shiping_email = ereg_replace("{ertek}", 		"<b>".$o['Order']['value']."</b>",		$shiping_email);
				$shiping_email = ereg_replace("{megtakaritas}",	"<b>".$o['Order']['discount']."</b>",	$shiping_email);
				$shiping_email = ereg_replace("{mennyiseg}", 	'<b style="font-size: 20px; color: green;\ font-weight: bold;">'.$o['Order']['quantity']."</b>", $shiping_email);
				$shiping_email = ereg_replace("{postakoltseg}", "<b>".$o['Order']['deliveryprice']."</b>",$shiping_email);
				$shiping_email = ereg_replace("{utanvet}", 		"<b>".$o['Order']['payment_amount']."</b>",$shiping_email );
				$shiping_email = ereg_replace("{fizetendo}", 	"<b>".$o['Order']['totalvalue']."</b>",	$shiping_email);

				$shiping_email = ereg_replace("{url}", "<a href=\"http://".$_SERVER['SERVER_NAME']."\">http://".$_SERVER['SERVER_NAME']."</a>", $shiping_email);

				$shiping_email = ereg_replace("\n", "<br />\n", $shiping_email);

				$email->send( $shiping_email );

				$email->to( $about['About']['company_email'] );
				$email->subject( $shiping_subject." - (másolat)" );
				$email->send( $shiping_email );

				$this->Session->setFlash(__('Mentés: Ok!'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok! (Nem található a megrendelés rekord!)'));
			}

			return $this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash(__('Mentés: NEM Ok.'));
		}
	}

	public function admin_index() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Order->recursive = -1;
		$this->paginate = array(
			'Order' => array(
				'limit' => 100,
				'order'=> array(
					'Order.delivered'=>'asc',
					'Order.id'=>'desc'
				)
			)
		);
		$this->set('orders', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Érvénytelen megrendelés'));
		}
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		$this->set('order', $this->Order->find('first', $options));
	}

	public function admin_add() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ($this->request->is('post')) {
			$this->Order->create();
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('mentés: NEM Ok!'));
			}
		}
	}

	public function admin_edit($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Order->exists($id)) {
			throw new NotFoundException(__('Érvénytelen megrendelés!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Order->save($this->request->data)) {
				$this->Session->setFlash(__('The order has been saved.'));
				return $this->redirect(array('action' => 'view', $id ));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
			$this->request->data = $this->Order->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Order->id = $id;
		if (!$this->Order->exists()) {
			throw new NotFoundException(__('Érvénytelen megrendelés'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Order->delete()) {
			$this->Session->setFlash(__('Törölve: Ok!.'));
		} else {
			$this->Session->setFlash(__('Törölve: NEM Ok!'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
?>
