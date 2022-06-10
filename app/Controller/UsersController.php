<?php
App::uses('AppController', 'Controller');
//App::uses('Router', 'Controller');
class UsersController extends AppController {
	public $uses = array('User');
	public $components = array( 'Paginator', 'Session', 'Auth' );

    public function beforeFilter(){
        parent::beforeFilter();
		// $this->Auth->allow('admin_add', 'admin_index', 'admin_delete', 'admin_view');
		//$this->Auth->allow('admin_add');

		// $this->Auth->authError = "This error shows up with the user tries to accessss";
		// if (!$this->Auth->loggedIn()) {
			// $this->Auth->authError = false;
		// }
    }


	public function login() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Légy üdvözölve!'));
				return $this->redirect( '/admin' );
			} else {
				return $this->redirect( '/' );
			}
		}
	}

	public function admin_login() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {

			// print_r($this->Auth->login()); die();

			if ($this->Auth->login()) {
				$this->Session->setFlash(__('Légy üdvözölve kedves Adminisztrátor!'));
				return $this->redirect( '/admin' );
			} else {
				return $this->redirect( '/' );
			}
		}
	}


	public function admin_changepassword($id = null) {
		$this->layout = 'admin';
		//later
	}

	public function logout() {
		return $this->redirect( $this->Auth->logout() );
		// $this->Auth->logout();
		// return $this->redirect( "/" );
	}

	public function admin_logout() {
		// $this->Auth->logout();
		// return $this->redirect( "/" );
		return $this->redirect( $this->Auth->logout() );
	}

	public function admin_index() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->paginate = array( 'User' =>
			array(
				//'limit' => 100,
				'conditions' => array(
					'email !=' => 'zsfoto@gmail.com',
					'username !=' => 'Adminisztrator'
				),
				// 'order'=> array(
					// 'User.username'=>'asc',
					// 'User.email'=>'asc'
				// )
			 )
		);

		$this->User->recursive = -1;
		$this->set('users', $this->Paginator->paginate());
	}

	/*
	public function admin_view($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}
	*/

	public function admin_add() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Nincs ilyen user!'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!.'));
				return $this->redirect('/admin');
				// return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		return $this->redirect('/');
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
