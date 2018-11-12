<?php
namespace Step\Acceptance;

class TestUserJoin extends \AcceptanceTester
{

    public function imaginUser()
    {
        $I = $this;
	    $user = [];
	    return $user;
    }

    public function joinUser($user)
    {
        $I = $this;
    }

    public function loginUser($user)
    {
        $I = $this;
    }

    public function logoutUser()
    {
        $I = $this;
    }

    public function isUserLogged($user)
    {
        $I = $this;
    }

    public function noUserLogged($user)
    {
        $I = $this;
    }

}