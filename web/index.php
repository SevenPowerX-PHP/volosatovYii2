<?php

	defined('YII_DEBUG') or define('YII_DEBUG', true);
	require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
	$config = require __DIR__ . '/../config/web.php';
	(new yii\web\Application($config))->run();
?>