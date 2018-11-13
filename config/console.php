<?php
	return [
		'id' => 'school-console',
		'basePath' => dirname(__DIR__),
		'components' =>[
			'db' => [
				'class' => 'yii\db\Connection',
				'dsn' => 'mysql:host=localhost; dbname=school_loc_win7',
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8'
			]
		]
	];