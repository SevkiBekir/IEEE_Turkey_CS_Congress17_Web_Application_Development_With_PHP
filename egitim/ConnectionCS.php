<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 14:17
 */
class ConnectionCS
{
    function __construct()
    {
        //$conn = new mysqli("localhost","root","12345678","sozluk","8080");
        $conn = new mysqli("localhost","root","123","sozluk");

        if($conn->connect_error)
            die("connection error");
    }

}