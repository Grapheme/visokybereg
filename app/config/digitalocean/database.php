<?php

return array(

	'fetch' => PDO::FETCH_CLASS,
	'default' => 'mysql',
	'connections' => array(
		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'visokiy_bereg',
			'username'  => 'root',
			'password'  => 'perl03',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),
	),
);