<?php
App::uses('AppController', 'Controller');
/**
 * CashOnDeliveries Controller
 *
 * @property CashOnDelivery $CashOnDelivery
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CashOnDeliveriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->layout = 'admin';
		$this->CashOnDelivery->recursive = -1;
		$this->set('cashOnDeliveries', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$this->CashOnDelivery->exists($id)) {
			throw new NotFoundException(__('Invalid cash on delivery'));
		}
		$options = array('conditions' => array('CashOnDelivery.' . $this->CashOnDelivery->primaryKey => $id));
		$this->set('cashOnDelivery', $this->CashOnDelivery->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->CashOnDelivery->create();
			if ($this->CashOnDelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The cash on delivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash on delivery could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->layout = 'admin';
		if (!$this->CashOnDelivery->exists($id)) {
			throw new NotFoundException(__('Invalid cash on delivery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CashOnDelivery->save($this->request->data)) {
				$this->Session->setFlash(__('The cash on delivery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash on delivery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CashOnDelivery.' . $this->CashOnDelivery->primaryKey => $id));
			$this->request->data = $this->CashOnDelivery->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->layout = 'admin';
		$this->CashOnDelivery->id = $id;
		if (!$this->CashOnDelivery->exists()) {
			throw new NotFoundException(__('Invalid cash on delivery'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CashOnDelivery->delete()) {
			$this->Session->setFlash(__('The cash on delivery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cash on delivery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
