<?php
App::uses('AppController', 'Controller');
class VisitorsController extends AppController {
	public $components = array( 'Paginator', 'Session', 'Auth' );
			
    public function beforeFilter(){
        parent::beforeFilter();
		// $this->Auth->allow('add');
    }
	
	public function admin_index() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->paginate = array( 'Visitor' => 
			array(
				'limit' => 100,
				'order' => array(
					'Visitor.id' => 'desc'
				)
			)
		);
		$this->Visitor->recursive = 0;
		$this->set('visitors', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Visitor->exists($id)) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$options = array('conditions' => array('Visitor.' . $this->Visitor->primaryKey => $id));
		$this->set('visitor', $this->Visitor->find('first', $options));
	}
	
	
	public function admin_delete($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
	
		$this->Visitor->id = $id;
		if (!$this->Visitor->exists()) {
			throw new NotFoundException(__('Invalid visitor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Visitor->delete()) {
			$this->Session->setFlash(__('The visitor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The visitor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
