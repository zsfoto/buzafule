<?php
	## Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	// Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'page_start'));
	
	Router::connect('/', array('controller' => 'abouts', 'action' => 'index' ));
	Router::connect('/re/*', array('controller' => 'abouts', 'action' => 'reorder' ));
	
	Router::connect('/admin', array('controller' => 'orders', 'action' => 'index', 'admin'=>TRUE ));
	Router::connect('/login', array('controller' => 'users', 'action' => 'login', 'admin'=>TRUE ));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout', 'admin'=>TRUE ));
	Router::connect('/chgpw', array('controller' => 'users', 'action' => 'changepassword', 'admin'=>TRUE ));
	
	// Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	CakePlugin::routes();
	
	require CAKE . 'Config' . DS . 'routes.php';
?>