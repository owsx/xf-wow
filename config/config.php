<?php

return array(

'mode' => 'debug',
'extend' => 'wow',
'charset' => 'utf8',

'uri.default_directory' => 'home',

'load.library' => 'user',

'database' => 'db,dba,dbc,dbw',
'db' => array(
	'type' => 'mysql',
	'addr' => '127.0.0.1:3306',
	'user' => 'root',
	'pass' => '123456',
	'name' => 'test',
),
'dba' => array(
	'type' => 'mysql',
	'addr' => '127.0.0.1:3306',
	'user' => 'root',
	'pass' => '123456',
	'name' => 'auth',
),
'dbc' => array(
	'type' => 'mysql',
	'addr' => '127.0.0.1:3306',
	'user' => 'root',
	'pass' => '123456',
	'name' => 'characters',
),
'dbw' => array(
	'type' => 'mysql',
	'addr' => '127.0.0.1:3306',
	'user' => 'root',
	'pass' => '123456',
	'name' => 'world',
),

'reg.type' => 1,
'reg.diff_time' => 10,
'reg.limit_email' => TRUE,

'' => '',
'' => '',
'' => '',
	
);
