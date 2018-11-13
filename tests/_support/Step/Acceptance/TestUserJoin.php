<?php
namespace Step\Acceptance;



class TestUserJoin extends \AcceptanceTester
{

    public function imaginUser()
    {
	    $faker = \Faker\Factory::create();


	    $user = [
		    'name' => $faker->name,
		    'email' => $faker->email,
		    'password' => $faker->password
	    ];

	    return $user;
    }

    public function joinUser($user)
    {
        $I = $this;
	    $I->amOnPage('/user/join');
	    $I->see('Join us');
	    $I->fillField('UserJoinForm[name]');
	    $I->fillField('UserJoinForm[email]');
	    $I->fillField('UserJoinForm[password]');
	    $I->fillField('UserJoinForm[password2]');
	    $I->click('Create');
    }

    public function loginUser($user)
    {
	    $I = $this;
	    $I->amOnPage('/user/login');
	    $I->see('Lig in');
	    $I->fillField('UserLoginForm[email]');
	    $I->fillField('UserLoginForm[password]');
	    $I->click('Enter');
    }

    public function logoutUser()
    {
        $I = $this;
	    $I->click('Logout');
    }

    public function isUserLogged($user)
    {
        $I = $this;
        $I->see($user['name']);
    }

    public function noUserLogged($user)
    {
        $I = $this;
	    $I->dontSee($user['name']);
    }

}