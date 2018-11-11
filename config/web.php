<?php
    return [
    'id' => 'school',
	    'basePath' => realpath(__DIR__ . '/../'),
	    'aliases' => [
		    '@bower' => '@vendor/bower-asset',
		    '@npm'   => '@vendor/npm-asset',
	    ],
	    'components' =>[
	    	'urlManager' => [
			    'enablePrettyUrl' => true,
			    'showScriptName' => false
		    ]
	    ]
    ];
?>