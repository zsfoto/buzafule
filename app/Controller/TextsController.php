<?php
App::uses('AppController', 'Controller');
class TextsController extends AppController {
	public $components = array( 'Paginator', 'Session', 'Auth', 'Email' );
	public $uses = array('Text');
			
    public function beforeFilter(){
        parent::beforeFilter();
		$this->Auth->allow('getMyText','fancybox');
    }

	public function getMyText( $id = 1) {
		$this->autoRender = false;
		Configure::write('debug', 0); //it will avoid any extra output
		$text = $this->Text->findById( $id );
		$MyText = '<h1>'.$text['Text']['name'].'</h1>';
		$MyText .= '<p>'.$text['Text']['text'].'</p>';
		$MyText = ereg_replace("\n", "<br />", $MyText);
		echo json_encode(array(
			'text'	=> $MyText
		));
	}
	
	public function fancybox( $id = 1) {
		$this->layout = 'text';
		//$this->autoRender = false;
		//Configure::write('debug', 0); //it will avoid any extra output
		$text = $this->Text->findById( $id );
		$MyText = '<h1>'.$text['Text']['name'].'</h1>';
		$MyText .= '<p>'.$text['Text']['text'].'</p>';
		$MyText = ereg_replace("\n", "<br />", $MyText);
		$this->set('text', $MyText);
		//echo json_encode(array(
			//'text'	=> $MyText
		//));
	}	
	
	public function admin_edit($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Text->exists($id)) {
			throw new NotFoundException(__('Nincs ilyen szöveg'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'edit', $id));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('Text.' . $this->Text->primaryKey => $id));
			$this->request->data = $this->Text->find('first', $options);
		}
			
		$email = FALSE;
		if( $id == 6 || $id >= 10){
			$email = TRUE;
		}
		$this->set('email',$email);
		
	}

	
	public function admin_index() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$this->Text->recursive = 0;
		$this->set('texts', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->Text->exists($id)) {
			throw new NotFoundException(__('Invalid text'));
		}
		$options = array('conditions' => array('Text.' . $this->Text->primaryKey => $id));
		$this->set('text', $this->Text->find('first', $options));
	}
	
	public function admin_add() {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ($this->request->is('post')) {
			$this->Text->create();
			if ($this->Text->save($this->request->data)) {
				$this->Session->setFlash(__('The text has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The text could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_delete($id = null) {
		return $this->redirect('/');
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		
		$this->Text->id = $id;
		if (!$this->Text->exists()) {
			throw new NotFoundException(__('Invalid text'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Text->delete()) {
			$this->Session->setFlash(__('The text has been deleted.'));
		} else {
			$this->Session->setFlash(__('The text could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


}
