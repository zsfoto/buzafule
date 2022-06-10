<?php
	Configure::write('debug', 1);
	Configure::write('Error', array(
		'handler' => 'ErrorHandler::handleError',
		'level' => E_ALL & ~E_DEPRECATED,
		'trace' => true
	));
	Configure::write('Exception', array(
		'handler' => 'ErrorHandler::handleException',
		'renderer' => 'ExceptionRenderer',
		'log' => true
	));
	Configure::write('App.encoding', 'UTF-8');
	// Configure::write('App.baseUrl', env('SCRIPT_NAME'));
	//Configure::write('App.fullBaseUrl', 'http://example.com');
	//Configure::write('App.imageBaseUrl', 'img/');
	//Configure::write('App.cssBaseUrl', 'css/');
	//Configure::write('App.jsBaseUrl', 'js/');
	Configure::write('Routing.prefixes', array('admin'));
	//Configure::write('Cache.disable', true);
	//Configure::write('Cache.check', true);
	//Configure::write('Cache.viewPrefix', 'prefix');
	Configure::write('Session', array(
		'defaults' => 'php'
	));
	Configure::write('Security.salt', 'asd....dfs');
	Configure::write('Security.cipherSeed', '123...321');
	//Configure::write('Asset.timestamp', true);
	//Configure::write('Asset.filter.css', 'css.php');
	//Configure::write('Asset.filter.js', 'custom_javascript_output_filter.php');
	Configure::write('Acl.classname', 'DbAcl');
	Configure::write('Acl.database', 'default');
	//date_default_timezone_set('UTC');
	$engine = 'File';
	$duration = '+999 days';
	if (Configure::read('debug') > 0) {
		$duration = '+10 seconds';
	}
	$prefix = 'myapp_';
	Cache::config('_cake_core_', array(
		'engine' => $engine,
		'prefix' => $prefix . 'cake_core_',
		'path' => CACHE . 'persistent' . DS,
		'serialize' => ($engine === 'File'),
		'duration' => $duration
	));
	Cache::config('_cake_model_', array(
		'engine' => $engine,
		'prefix' => $prefix . 'cake_model_',
		'path' => CACHE . 'models' . DS,
		'serialize' => ($engine === 'File'),
		'duration' => $duration
	));
?>
