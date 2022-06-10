<?php
App::uses('AppController', 'Controller');
class PricesController extends AppController {

	public $components = array('Paginator');

    public function beforeFilter(){
		parent::beforeFilter();
		//if ($this->Auth->loggedIn()) { 
			//Configure::write('debug', 2);
		//}
    }

	
	public function admin_index() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Price->recursive = -1;
		$this->paginate = array( 
			'Price' => array(
				// 'limit' => 20,
				'order'=> array(
					'Price.quantity'=>'asc'				)
			)
		);
		$this->set('prices', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Price->exists($id)) {
			throw new NotFoundException(__('Invalid price'));
		}
		$options = array('conditions' => array('Price.' . $this->Price->primaryKey => $id));
		$this->set('price', $this->Price->find('first', $options));
	}

	public function admin_add() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ($this->request->is('post')) {
			$this->Price->create();
			if ($this->Price->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('NEM Ok!'));
			}
		}
	}

	public function admin_edit($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Price->exists($id)) {
			throw new NotFoundException(__('Invalid price'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Price->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('Price.' . $this->Price->primaryKey => $id));
			$this->request->data = $this->Price->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Price->id = $id;
		if (!$this->Price->exists()) {
			throw new NotFoundException(__('Invalid price'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Price->delete()) {
			$this->Session->setFlash(__('Törölve: Ok!'));
		} else {
			$this->Session->setFlash(__('Törölve: NEM Ok!'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
}
