<?php
App::uses('AppController', 'Controller');
class EmailEmailsController extends AppController {

	public $components = array( 'Paginator', 'Session', 'Auth', 'Email' );
	
    public function beforeFilter(){
        parent::beforeFilter();
		$this->layout = 'admin';
		//$this->Auth->allow('neworder');
		//if ($this->Auth->loggedIn()) { 
			//Configure::write('debug', 2);
		//}
		
    }

	public function admin_import($template_id=Null, $onlyNews=Null){
		$last_id = 0;
		if($template_id==Null){
			$this->Session->setFlash(__('Hiányzó sablon ID!'));
			return $this->redirect(array('controller'=>'emailEmails', 'action'=>'index',$template_id));
		}
		
		
		if(isset($onlyNews) && $onlyNews=='onlyNews'){
			$last = $this->EmailEmail->find('first', array(
				'order'=>array(
					'EmailEmail.order_id'=>'desc'
				)
			));
			$last_id = $last['EmailEmail']['order_id'];
		}		
		
		//debug($last_id); die();
		
		$this->loadModel('Orders');
		$this->Orders->recursive = -1;
		$orders = $this->Orders->find('all', array(
			'conditions' => array(
				'id >' => $last_id
			),
			'order'=>array(
				'id'=>'asc'
			)
		));
		//debug($orders); die();
		
		foreach($orders as $order){
			$email['EmailEmail']['order_id']			= $order['Orders']['id'];
			$email['EmailEmail']['email_template_id'] 	= $template_id;
			$email['EmailEmail']['name'] 				= $order['Orders']['name'];
			$email['EmailEmail']['address']				= $order['Orders']['postcode'].' '.$order['Orders']['city'].', '.$order['Orders']['address'];
			$email['EmailEmail']['email'] 				= $order['Orders']['email'];
			$email['EmailEmail']['phone']				= $order['Orders']['phone'];
			$email['EmailEmail']['last_order']			= $order['Orders']['created'];
			$email['EmailEmail']['sent']				= Null;
			$email['EmailEmail']['order_count']			= 1;
			$email['EmailEmail']['order_qty']			= $order['Orders']['quantity'];
			
			$this->EmailEmail->recursive = -1;
			$exists = $this->EmailEmail->find('first', array(
				'conditions' => array(
					'email_template_id' => $template_id,
					'email' => $order['Orders']['email'],
				)
			));
			
			if( !$exists ){
				$this->EmailEmail->create();
				$this->EmailEmail->save($email);
			}else{
				$exists['EmailEmail']['order_id'] 	= $order['Orders']['id'];
				$exists['EmailEmail']['order_count']++;
				$exists['EmailEmail']['order_qty'] 	+= $order['Orders']['quantity'];
				$exists['EmailEmail']['last_order']	= $order['Orders']['created'];
				$this->EmailEmail->save($exists);
			}
				
		}
		$this->Session->setFlash(__('Importálás: OK!'));
		return $this->redirect(array('action' => 'index', $template_id));
	}
	
	public function admin_index($template_id=Null){
		if($template_id == Null){
			$this->Session->setFlash(__('Hiányzó sablon ID!'));
			return $this->redirect(array('action'=>'index', 'controller'=>'emailTemplates'));
		}

		$this->paginate = array(
			'conditions' => array(
				'email_template_id' => $template_id
			),
			'order' => array(
				'order_id' => 'desc'
			),
			'limit' => 2000,
			'maxLimit' => 2000
		);
		$this->EmailEmail->recursive = 0;
		$emailEmail	= $this->Paginator->paginate();
		$this->set('emailEmails', $emailEmail);
		$this->set('template_id', $template_id);
		$this->set('email_count', count($emailEmail));
	}

	public function admin_view($id = null) {
		if (!$this->EmailEmail->exists($id)) {
			throw new NotFoundException(__('Hiányzó ID!'));
		}
		$options = array('conditions' => array('EmailEmail.' . $this->EmailEmail->primaryKey => $id));
		$this->set('emailEmail', $this->EmailEmail->find('first', $options));
	}

	public function admin_edit($id = null, $template_id=Null, $anchor=Null) {
		if (!$this->EmailEmail->exists($id)) {
			throw new NotFoundException(__('Hiányzó ID!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmailEmail->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: OK!'));
				return $this->redirect('/admin/emailEmails/index/'.$template_id.'#'.$anchor);
			} else {
				$this->Session->setFlash(__('Mentés: NEM OK!'));
			}
		} else {
			$options = array('conditions' => array('EmailEmail.' . $this->EmailEmail->primaryKey => $id));
			$this->request->data = $this->EmailEmail->find('first', $options);
		}
		$emailTemplates = $this->EmailEmail->EmailTemplate->find('list');
		$this->set(compact('emailTemplates'));
	}

	public function admin_delete($id = null, $template_id=Null, $anchor=Null) {
		$this->EmailEmail->id = $id;
		if (!$this->EmailEmail->exists()) {
			throw new NotFoundException(__('Hiányzó ID!'));
		}
		//$this->request->allowMethod('post', 'delete');		
		if ($this->EmailEmail->delete()) {
			$this->Session->setFlash(__('Törölve: OK!'));
		} else {
			$this->Session->setFlash(__('Törölve: NEM OK!'));
		}
		return $this->redirect('/admin/emailEmails/index/'.$template_id.'#'.$anchor);
	}
}
