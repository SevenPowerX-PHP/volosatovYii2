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
			return 'Hello,World!!!';
		}
	}