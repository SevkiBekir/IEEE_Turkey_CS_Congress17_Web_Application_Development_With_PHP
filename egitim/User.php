<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 11:09
 */
class User
{
    protected $loggedIn;

    function __construct()
    {
        $this->loggedIn = false;
    }
    public function logIn (){
        $this->loggedIn = true;
    }
    /**
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->loggedIn;
    }
    /**
     * @param bool $loggedIn
     */
    public function setLoggedIn($loggedIn)
    {
        $this->loggedIn = $loggedIn;
    }
    function printLogInformation (){
        echo "The log information of the user is ".$this->isLoggedIn();
    }
}