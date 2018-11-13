<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 13.11.2018
	 * Time: 21:19
	 */

	namespace app\models;


	use yii\db\ActiveRecord;

	class UserRecord extends ActiveRecord
	{
		public static function tableName()
		{
			return 'user';
		}

		public function setTestUser()
		{
			$this->name = 'splaa';
			$this->email = 'splaandrey@gmail.com';
			$this->passhash = 'PASSSHASH PASSSHASH PASSSHASH';
			$this->status = 2;
		}
	}