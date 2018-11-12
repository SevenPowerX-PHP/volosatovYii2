<?php

	use yii\bootstrap\Nav;
	use yii\bootstrap\NavBar;

?>
<?php
    $this->beginPage();
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>YII2 ViDeoSchool!</title>
	<?php
		$this->head();
	?>
</head>
<body>
<?php
	$this->beginBody();
?>
<?php
	$menu =[
				['label' => 'Home','url' => ['site/index']],
				['label' => 'Join','url' => ['user/join']],
				['label' => 'Login','url' => ['user/login']],
				['label' => 'About','url' => ['site/about']],
		];
	NavBar::begin([
		'brandLabel' => 'SevenPowerX 2018',
		'brandUrl' => Yii::$app->homeUrl,
		'options' => [
			'class' => 'navbar-default navbar-fixed-top'
		]
	]);

	echo Nav::widget([
			'options' => ['class' => 'navbar-nav navbar-right'],
			'items' => $menu]);
	NavBar::end();
?>
	<div class="container" style="margin-top: 70px">
<?= $content ?>
	</div>
<?php
	$this->endBody();
?>
</body>
</html>
<?php
	$this->endPage();
?>