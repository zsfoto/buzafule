<?php
App::uses('AppController', 'Controller');
class PhotosController extends AppController {
	public $components = array('Paginator');

	public function admin_add() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}	
		if ($this->request->is('post')) {
			// if($this->request->data['fileSmall']['type'] != "image/jpeg" || $this->request->data['fileBig']['type'] != "image/jpeg"){
				// $this->Session->setFlash(__('Érvénytelen képfájl! Kérem válasszon másikat.', true));
				// $this->redirect(array('action' => 'add'));
			// }
			$filePath = WWW_ROOT.'img'.DS.'photos'.DS;
			if(!file_exists($filePath)){
				mkdir($filePath);
			}
			
			$fileSmallTmp 	= $this->request->data['Photo']['fileSmall']['tmp_name'];
			$fileBigTmp 	= $this->request->data['Photo']['fileBig']['tmp_name'];

			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$lastId = $this->Photo->getLastInsertId();
				
				$fileSmallWithPath = $filePath.$lastId.'_small.jpg';
				if(!move_uploaded_file($fileSmallTmp, $fileSmallWithPath )){
					$this->Session->setFlash(__('Nem sikerült a kis TMP filet mozgatni! ('.$filePath.')', true));
					return $this->redirect(array('action' => 'index'));
				}
				
				$fileBigWithPath = $filePath.$lastId.'.jpg';
				if(!move_uploaded_file($fileBigTmp, $fileBigWithPath )){
					$this->Session->setFlash(__('Nem sikerült a nagy TMP filet mozgatni!', true));
					return $this->redirect(array('action' => 'index'));
				}
				
				$this->Session->setFlash(__('Mentés: OK!'));
				return $this->redirect(array('action' => 'index'));
				
			} else {
				$this->Session->setFlash(__('Nem sikerült menteni!'));
				
			}
		}
		
	}
	
	
	public function admin_index() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}		
		$this->Photo->recursive = -1;
		$this->paginate = array( 
			'Photo' => array(
				// 'limit' => 20,
				'order'=> array(
					'Photo.position'=>'asc',
					'Photo.id'=>'asc'
				)
			)
		);
		$this->set('photos', $this->Paginator->paginate());
	}

	public function admin_add1() {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}		
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		}
	}

	public function admin_edit($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}		
		if (!$this->Photo->exists($id)) {
			throw new NotFoundException(__('Érvénytelen fotó'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('Photo.' . $this->Photo->primaryKey => $id));
			$this->request->data = $this->Photo->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->layout = 'admin';
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}		
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Nincs ilyen kép'));
		}
		$this->request->onlyAllow('post', 'delete');
		$filePath = WWW_ROOT.'img'.DS.'photos'.DS;
		if(!file_exists($filePath)){
			mkdir($filePath);
		}		
		
		if(file_exists($filePath.$id.'_small.jpg')){
			unlink($filePath.$id.'_small.jpg');
		}
		if(file_exists($filePath.$id.'.jpg')){
			unlink($filePath.$id.'.jpg');
		}
		
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Törölve!'));
		} else {
			$this->Session->setFlash(__('Nem sikerült törölni'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
}
?>
