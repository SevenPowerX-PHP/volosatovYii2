<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 12.11.2018
	 * Time: 14:52
	 */

	namespace app\controllers;


	use yii\web\Controller;

	class UserController extends Controller
	{
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
	}