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
			$faker = \Faker\Factory::create();

			$this->name = $faker->name;
			$this->email = $faker->email;
			$this->passhash = $faker->password;
			$this->status = $faker->randomDigit;
		}
	}