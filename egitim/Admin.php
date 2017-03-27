<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 11:13
 * @property bool isAdmin
 */
class Admin extends User
{
    private $isAdmin;
    function __construct()
    {
        $this->isAdmin = false;
    }
    public function printPost(){
        echo "PrintPost";
    }

}