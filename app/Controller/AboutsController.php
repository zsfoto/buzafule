<?php
App::uses('AppController', 'Controller');
class AboutsController extends AppController {
	public $components = array( 'Paginator', 'Session', 'Auth' );
	public $uses = array('About','Photo', 'Text', 'Price', 'Order', 'Visitor', 'CashOnDelivery');
			
    public function beforeFilter(){
        parent::beforeFilter();
		// $this->Auth->allow('index');
		$this->Auth->allow('index','reorder', 'getCashOnDelivery');
    }	

	public function getCashOnDelivery(){
		$this->autoRender = false;
		//Configure::write('debug', 0); //it will avoid any extra output
		$success = FALSE;

		$about = $this->About->findById(1);
		
		$qty = $this->request->data['Order']['qty'];
		
		
		//if($qty > 0){
			
			$paymentType = $this->request->data['Order']['paymentType'];
			
			$this->Price->recursive = -1;
			$order = $this->Price->find('first',
				array(
					'conditions'=>array(
						'quantity' => $this->request->data['Order']['qty'],
					),
				)
			);

			$price = 0;
			if(!empty($order)){
				$price = $order['Price']['price'] + $order['Price']['delivery_price'];
			}			
			
			$this->CashOnDelivery->recursive = -1;
			$cashOnDelivery = $this->CashOnDelivery->find('first', 
				array(
					'conditions'=>array(
						'price_from <= ' => $price,
						'price_to >= '	 => $price
					),
					//'order' =>array(
					//	'CashOnDelivery.price_from' => 'asc',
					//	'CashOnDelivery.price_to' => 'asc'
					//)
				)
			);
			
			$retCashOnDelivery = 0;
			
			if(!empty($cashOnDelivery)){
				$retCashOnDelivery = $cashOnDelivery['CashOnDelivery']['cashOnDelivery'];				
			}else{
				$retCashOnDelivery = $o['Order']['totalvalue'] * ($about['About']['cash_on_delivery_percent']/100);
			}

			$owing = 0;
			if(!empty($order)){
				$owing = $order['Price']['price'] + $order['Price']['delivery_price'];
				if($paymentType == 1){
					$retCashOnDelivery = $cashOnDelivery['CashOnDelivery']['cashOnDelivery'];
					$owing = $order['Price']['price'] + $order['Price']['delivery_price'] + $retCashOnDelivery;
				}
			}

		//}	// $qty > 0



		if(!empty($order['Price']['price'])){
			$price = $order['Price']['price'];
		}else{
			$price = 0;
		}
		if(!empty($order['Price']['discount'])){
			$discount = $order['Price']['discount'];
		}else{
			$discount = 0;
		}
		if(!empty($order['Price']['delivery_price'])){
			$delivery_price = $order['Price']['delivery_price'];
		}else{
			$delivery_price = 0;
		}

		if(!empty($order)){
			$success = true;
		}

		echo json_encode(array(
			'success'		 				  => $success,
			'price'			 				  => $price,
			'discount'		 				  => $discount,
			'delivery_price' 				  => $delivery_price,
			'owing' 		 				  => $owing,
			'cashOndeliveryPaymentOptionText' => 'Utánvét: +' . $cashOnDelivery['CashOnDelivery']['cashOnDelivery'] . ' Ft',
			'cashOnDelivery' 				  => $retCashOnDelivery
		));

	}
	
	
	public function index(){
		$this->About->recursive = -1;
		$about = $this->About->findById(1);
		$this->set('about', $about );
		
		$texts = $this->Text->find('all');
		$this->set('texts', $texts );

		$this->Price->recursive = -1;
		$this->set('prices', $this->Price->find('all',array( 'order' => array('Price.quantity'=>'asc')) ));
		$this->set('pricecounts', $this->Price->find('count'));

		//---------------------------------------------- Visitor LOG ------------------------------------------
		/*
		$visitor = array();
		if(isset($_SERVER['REMOTE_ADDR'])){
			$visitor['Visitor']['remote_host'] = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		}else{
			$visitor['Visitor']['remote_hosthost'] = '-';
		}
		
		if(isset($_SERVER['REMOTE_ADDR'])){
			$visitor['Visitor']['ip'] = $_SERVER['REMOTE_ADDR'];
		}else{
			$visitor['Visitor']['ip'] = '-';
		}		
		
		if(isset($_SERVER['HTTP_REFERER'])){
			$visitor['Visitor']['referer'] = $_SERVER['HTTP_REFERER'];
		}else{
			$visitor['Visitor']['referer'] = '-';
		}
		
		$this->Visitor->create();
		$this->Visitor->save( $visitor );
		*/
		//---------------------------------------------- / LOG ------------------------------------------
		
		$name 		= $this->Session->read('Order.name');
		$phone 		= $this->Session->read('Order.phone');
		$email 		= $this->Session->read('Order.email');
		$postcode 	= $this->Session->read('Order.postcode');
		$city 		= $this->Session->read('Order.city');
		$address 	= $this->Session->read('Order.address');

		$this->set('name', $name);
		$this->set('phone', $phone);
		$this->set('email', $email);
		$this->set('postcode', $postcode);
		$this->set('city', $city);
		$this->set('address', $address);					
		
		// $photos = $this->Photo->find('all', 
			// array( 'order' => array(
					// 'Photo.position'=>'asc',
					// 'Photo.id'=>'asc'
				// )
			// )
		// );
		// $this->set('photos', $photos );
		
	
		
		
	}


	function reorder($id = null, $uuid = null){
		// $this->layout = 'admin';	
		// if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$click_to_link = 0;
		$this->Session->write('Order.name','');
		$this->Session->write('Order.phone','');
		$this->Session->write('Order.email','');
		$this->Session->write('Order.postcode','');
		$this->Session->write('Order.city','');
		$this->Session->write('Order.address','');

		if(!$id && !$uuid){
			return $this->redirect('/');
		}else{
			$this->Order->recursive = -1;
			$order = $this->Order->findById( $id );
			if( $order && $order['Order']['uuid'] == $uuid ){
				$this->Session->write('Order.name',$order['Order']['name']);
				$this->Session->write('Order.phone',$order['Order']['phone']);
				$this->Session->write('Order.email',$order['Order']['email']);
				$this->Session->write('Order.postcode',$order['Order']['postcode']);
				$this->Session->write('Order.city',$order['Order']['city']);
				$this->Session->write('Order.address',$order['Order']['address']);
				$this->Order->id = $id;
				$this->Order->saveField('click_to_link', $order['Order']['click_to_link']+1 );
			}		
			return $this->redirect('/#!/page_ORDER');			
		}
		
	}
	
	public function admin_ogimages($mode = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ( $mode ) {
			$filePath = WWW_ROOT.'images'.DS;
			if(!file_exists($filePath)){
				mkdir($filePath);
			}
			if( isset($this->request->data['About']['photo1']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo1']['tmp_name'], $filePath."ogimage1.jpg"); }
			if( isset($this->request->data['About']['photo2']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo2']['tmp_name'], $filePath."ogimage2.jpg"); }
			if( isset($this->request->data['About']['photo3']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo3']['tmp_name'], $filePath."ogimage3.jpg"); }
			if( isset($this->request->data['About']['photo4']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo4']['tmp_name'], $filePath."ogimage4.jpg"); }
			if( isset($this->request->data['About']['photo5']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo5']['tmp_name'], $filePath."ogimage5.jpg"); }
			return $this->redirect(array('action' => 'ogimages'));
		}
	}

	public function admin_deleteogimage($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if(!$id){return $this->redirect(array('action' => 'ogimages'));}
		if(file_exists(WWW_ROOT."images".DS."ogimage".$id.".jpg")){
			unlink(WWW_ROOT."images".DS."ogimage".$id.".jpg");
			return $this->redirect(array('action' => 'ogimages'));
		}
	}
	
	public function admin_uploadslide($mode = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ( $mode ) {
			$filePath = WWW_ROOT.'images'.DS;
			if(!file_exists($filePath)){
				mkdir($filePath);
			}
			if( isset($this->request->data['About']['photo1']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo1']['tmp_name'], $filePath."slideimg1.jpg"); }
			if( isset($this->request->data['About']['photo2']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo2']['tmp_name'], $filePath."slideimg2.jpg"); }
			if( isset($this->request->data['About']['photo3']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo3']['tmp_name'], $filePath."slideimg3.jpg"); }
			if( isset($this->request->data['About']['photo4']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo4']['tmp_name'], $filePath."slideimg4.jpg"); }
			if( isset($this->request->data['About']['photo5']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo5']['tmp_name'], $filePath."slideimg5.jpg"); }
			if( isset($this->request->data['About']['photo6']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo6']['tmp_name'], $filePath."slideimg6.jpg"); }
			return $this->redirect(array('action' => 'uploadslide'));
		}
	}

	public function admin_deleteslide($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if(!$id){return $this->redirect(array('action' => 'uploadslide'));}
		if(file_exists(WWW_ROOT."images".DS."slideimg".$id.".jpg")){
			unlink(WWW_ROOT."images".DS."slideimg".$id.".jpg");
			return $this->redirect(array('action' => 'uploadslide'));
		}
	}
	
	public function admin_thumbnails($mode = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if ( $mode ) {
			$filePath = WWW_ROOT.'images'.DS;
			if(!file_exists($filePath)){
				mkdir($filePath);
			}
			if( isset($this->request->data['About']['photo1']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo1']['tmp_name'], $filePath."thumbnail1.jpg"); }
			if( isset($this->request->data['About']['photo2']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo2']['tmp_name'], $filePath."thumbnail2.jpg"); }
			if( isset($this->request->data['About']['photo3']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo3']['tmp_name'], $filePath."thumbnail3.jpg"); }
			if( isset($this->request->data['About']['photo4']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo4']['tmp_name'], $filePath."thumbnail4.jpg"); }
			if( isset($this->request->data['About']['photo5']['tmp_name']) ){ move_uploaded_file($this->request->data['About']['photo5']['tmp_name'], $filePath."thumbnail5.jpg"); }
			return $this->redirect(array('action' => 'thumbnails'));
		}
	}
	
	public function admin_deletethumbnail($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if(!$id){return $this->redirect(array('action' => 'thumbnails'));}
		if(file_exists(WWW_ROOT."images".DS."thumbnail".$id.".jpg")){
			unlink(WWW_ROOT."images".DS."thumbnail".$id.".jpg");
			return $this->redirect(array('action' => 'thumbnails'));
		}
	}
	
	public function admin_terms($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'terms','1'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}	
	
	public function admin_privacy($id = null) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'privacy','1'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}	
	
	public function admin_edit($id = 1) {
		$this->layout = 'admin';
		$id = 1;
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'edit','1'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	public function admin_confirm($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'confirm'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	public function admin_shiping($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'shiping'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	public function admin_message($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'message'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	
	public function admin_wheatgrassjuice($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'wheatgrassjuice'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	
	public function admin_delivery($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'delivery'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	
	public function admin_facebook($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'facebook'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	public function admin_mainpage($id = 1) {
		$this->layout = 'admin';	
		if (!$this->Auth->loggedIn()) { echo "Naaa"; die();}
		$id = 1;
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Érvénytelen rekord azonosító'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('Mentés: Ok!'));
				return $this->redirect(array('action' => 'mainpage'));
			} else {
				$this->Session->setFlash(__('Mentés: NEM Ok!'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}
	
	
}
?>