<?php
	return [
		'bootstrap' => ['debug'],
		'id' => 'school',
		'basePath' => realpath(__DIR__ . '/../'),
		'aliases' => [
			'@bower' => '@vendor/bower-asset',
			'@npm' => '@vendor/npm-asset',
		],
		'components' => [
			'urlManager' => [
				'enablePrettyUrl' => true,
				'showScriptName' => false
			],
			'request' => [
				// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
				'cookieValidationKey' => 'SevenPowerX2018 SecretCode',
			],
			'db' => require __DIR__ . '\db.php'

		],
		'modules' => [
			'debug' => [
				'class' => 'yii\debug\Module',
			],
			],
	];
?>