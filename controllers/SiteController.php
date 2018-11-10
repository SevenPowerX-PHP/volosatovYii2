<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 08.11.2018
	 * Time: 6:59
	 */

	namespace app\controllers;


	use yii\web\Controller;

	class SiteController extends Controller
	{

		public function actionIndex()
		{
			$str = 'Hello,World!!!';
			$str .= '<br>';
			$str .= 'ViDeoSchool!!!';
			return $this->render('index');
		}
		public function actionJoin()
		{
			$str = 'Hello,World!!!';
			$str .= '<br>';
			$str .= 'ViDeoSchool!!!';
			return $this->render('join');
		}
		public function actionLogin()
		{
			$str = 'Hello,World!!!';
			$str .= '<br>';
			$str .= 'ViDeoSchool!!!';
			return $this->render('login');
		}
		public function actionAbout()
		{
			$str = 'Hello,World!!!';
			$str .= '<br>';
			$str .= 'ViDeoSchool!!!';
			return $this->render('about');
		}

	}