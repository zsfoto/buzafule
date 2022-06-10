<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {

	public $helpers = array('Session', 'Form', 'Html');
	// public $helpers = array("Session", "Javascript", "Html", "Form", "Ajax", 'Js'=>array('Jquery'));

	public $FacebookTitle, $FacebookDescription;	
	
	public $about;
	
	public $components = array(
		'Session',
		'Auth' => array(
			// 'loginRedirect' => array(
				// 'controller' 	=> 'mails',
				// 'action'		=> 'index',
				// 'admin'			=> TRUE
			// ),
			'logoutRedirect' => array( '/' ),
			'loginRedirect' => array( '/admin/mails/index' )
		)
	);
	
	public function beforeFilter(){
	
		// $this->Auth->allow('index','add', 'edit');	
		
        // Security::setHash('sha512');
		
		$this->Auth->authenticate = array('Form');
		
		$this->Auth->authError = "Kérem jelentkezzens be!";
		if (!$this->Auth->loggedIn()) {
			$this->Auth->authError = false;
		}

		if(	$_SERVER['HTTP_HOST'] == "búzafűlé.hu" || 
			$_SERVER['HTTP_HOST'] == "www.búzafűlé.hu" ||
			$_SERVER['HTTP_HOST'] == "xn--bzaf-l-gva4kq0c.hu" ||
			$_SERVER['HTTP_HOST'] == "www.xn--bzaf-l-gva4kq0c.hu" )
			// $_SERVER['HTTP_HOST'] == "buza.loc" )
		{
			$this->layout = "forward";
		}

		$this->loadModel('About');
		$this->about = $this->About->findById(1);
		$this->set('about', $this->about);
		
	}

	
}
?>
