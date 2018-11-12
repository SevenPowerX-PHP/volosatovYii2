<?php
	$I = new AcceptanceTester($scenario);
	$I->wantTo('Open the home/join/login page');

	$I->amOnPage('/');
	$I->see('Welcome to SevenPowerX 2018!', 'h1');

	$I->seeLink('Join', '/user/join');
	$I->seeLink('Login', '/user/login');

	$I->amOnPage('/user/join');
	$I->see('Join as', 'h1');

	$I->amOnPage('/user/login');
	$I->see('Log in', 'h1');