<?php
/**
 * Extra HTTP Status Code Messages
 */
Response::$messages[102] = 'Processing';
Response::$messages[207] = 'Multi-Status';
Response::$messages[422] = 'Unprocessable Entity';
Response::$messages[423] = 'Locked';
Response::$messages[424] = 'Failed Dependency';
Response::$messages[507] = 'Insufficient Storage';

/**
 * Routes
 */
Route::set('api', 'api(/<version>)/<controller>(/<id>)(/<custom>)(/<id2>)(/<custom2>)(<custom3>)(.<format>)',
	array (
			'version'     => '[0-9]++',
			'id'          => '[0-9;]++',
			'id2'         => '[0-9;]++',
			'custom'      => '[a-z]++',
			'custom2'     => '[a-z]++',
			'custom3'     => '[a-z]++',				
	))
	->defaults(array(
			'version'    => '1',
			'directory'  => 'API',
			'id' 	     => NULL,
			'custom'     => NULL,
			'id2'        => NULL,
			'custom2'    => NULL,
));