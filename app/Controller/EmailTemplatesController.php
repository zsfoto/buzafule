<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class EmailTemplatesController extends AppController {

	public $components = array( 'Paginator', 'Session', 'Auth', 'Email' );

    public function beforeFilter(){
        parent::beforeFilter();
		$this->layout = 'admin';
    }

	public function admin_send($id, $test=Null) {
		set_time_limit ( 10000 );
		$count = 0;

		if (!$this->EmailTemplate->exists($id)) {
			throw new NotFoundException(__('Hiányzó ID!'));
		}
		$this->EmailTemplate->recursive = -1;
		$template = $this->EmailTemplate->findById($id);

		//debug($template); die();

		/*
		if($template['EmailTemplate']['sent'] != Null){
			$this->Session->setFlash(__('Ezt a körlevelet "'.$template['EmailTemplate']['title'].'" már kiküldtük! Még egyszer nem küldhető ki!'));
			return $this->redirect(array('action' => 'index'));
		}
		*/

		if($template['EmailTemplate']['email_email_count'] == 0){
			$this->Session->setFlash(__('Címzettek hiányában nem tudjuk kiküldeni az emaileket!'));
			return $this->redirect(array('action' => 'index'));
		}

		$this->loadModel('About');
		$about = $this->About->findById(1);

		$this->loadModel('EmailEmails');
		$conditions = array(
			'conditions' => array(
				'email_template_id' => $id,
				'sent' => Null	//Ki volt kommentelve
			),
			//'limit' => 2000
		);
		$emails = $this->EmailEmails->find('all', $conditions);
		//echo $about['About']['company_name'];
		//debug(); die();

		if($test=='teszt'){

			$email = new CakeEmail('default');
			$email->emailFormat('html');
			$email->template('default', 'default') ;
			//$email->from(array($about['About']['company_email'] => $about['About']['company_name']));
			$email->from(array('buzafule@buzafule-horvath.hu' => $about['About']['company_name']));
			$email->subject( 'TESZT: '. $template['EmailTemplate']['title'] );

			$emailbody = $template['EmailTemplate']['body'];

			$emailbody = ereg_replace("{{nev}}", 	'Teszt Felhasználó', 	$emailbody);
			$emailbody = ereg_replace("{{neve}}", 	'Teszt Felhasználó', 	$emailbody);
			$emailbody = ereg_replace("{{cim}}", 	'Cím helye', 			$emailbody);
			$emailbody = ereg_replace("{{cime}}", 	'Cím helye', 			$emailbody);
			$emailbody = ereg_replace("{{tel}}", 	'Telefonszám', 			$emailbody);
			$emailbody = ereg_replace("{{telefon}}",'Telefonszám', 			$emailbody);
			$emailbody = ereg_replace("{{phone}}", 	'Telefonszám', 			$emailbody);
			$emailbody = ereg_replace("{{email}}", 	'Email helye', 			$emailbody);

			$email->to('agrarkereskedohaz@gmail.com');
			$email->send($emailbody);

			$email->reset();

		}else{

			foreach($emails as $e){

				$email = new CakeEmail('default');
				$email->emailFormat('html');
				$email->template('default', 'default') ;
				//$email->from(array($about['About']['company_email'] => $about['About']['company_name']));
				$email->from(array('buzafule@buzafule-horvath.hu' => $about['About']['company_name']));
				$email->subject( $template['EmailTemplate']['title'] );
				$email->to( $e['EmailEmails']['email'] );

				$emailbody = $template['EmailTemplate']['body'];

				$emailbody = ereg_replace("{{nev}}", 	$e['EmailEmails']['name'], $emailbody);
				$emailbody = ereg_replace("{{neve}}", 	$e['EmailEmails']['name'], $emailbody);
				$emailbody = ereg_replace("{{cim}}", 	$e['EmailEmails']['address'], $emailbody);
				$emailbody = ereg_replace("{{cime}}", 	$e['EmailEmails']['address'], $emailbody);
				$emailbody = ereg_replace("{{tel}}", 	$e['EmailEmails']['phone'], $emailbody);
				$emailbody = ereg_replace("{{telefon}}",$e['EmailEmails']['phone'], $emailbody);
				$emailbody = ereg_replace("{{phone}}", 	$e['EmailEmails']['phone'], $emailbody);
				$emailbody = ereg_replace("{{email}}", 	$e['EmailEmails']['email'], $emailbody);


				if( $email->send($emailbody) ){
					$e['EmailEmails']['sent'] = date("Y-m-d H:i:s");
					$this->EmailEmails->save($e);
					$count++;
				}

				$email->reset();

			}

			if($count>0){
				$template['EmailTemplate']['sent'] = date("Y-m-d H:i:s");
				$this->EmailTemplate->save($template);
			}

		}


		$this->Session->setFlash(__('<span style="font-family: Arial">Ezt a körlevelet <b>'.$count.'</b> címre küldtük ki a <b>'.$template['EmailTemplate']['email_email_count'].'</b> címből!</span>'));

		return $this->redirect(array('action' => 'index'));
	}






	public function admin_index() {
		$this->paginate = array(
			'order' => array(
				'id' => 'desc'
			),
			'limit' => 1000,
			'maxLimit' => 1000
		);

		$this->EmailTemplate->recursive = 0;
		$this->set('emailTemplates', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->EmailTemplate->exists($id)) {
			throw new NotFoundException(__('Hiányzó ID!'));
		}
		$options = array('conditions' => array('EmailTemplate.' . $this->EmailTemplate->primaryKey => $id));
		$this->set('emailTemplate', $this->EmailTemplate->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EmailTemplate->create();
			if ($this->EmailTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: OK!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM OK!'));
			}
		}
		$this->request->data['EmailTemplate']['body'] = '<strong>Kedves {{nev}}!</strong><br /><br /><br /><br /><br /><br /><br /><br />Üdvözlettel: Horváth István<br />őstermelő<br /><br /><br />';
		//debug($this->request->data); //['EmailTemplate']['body'] = 'Hello';
		//die();
	}

	public function admin_edit($id = null) {
		if (!$this->EmailTemplate->exists($id)) {
			throw new NotFoundException(__('Invalid email template'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmailTemplate->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: OK!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM OK!'));
			}
		} else {
			$options = array('conditions' => array('EmailTemplate.' . $this->EmailTemplate->primaryKey => $id));
			$this->request->data = $this->EmailTemplate->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->EmailTemplate->id = $id;
		if (!$this->EmailTemplate->exists()) {
			throw new NotFoundException(__('Hiányzó ID!'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EmailTemplate->delete()) {
			$this->Session->setFlash(__('Törölve: OK!'));
		} else {
			$this->Session->setFlash(__('Törölve: NEM OK!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
