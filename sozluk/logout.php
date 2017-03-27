<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 01:48
 */

session_start();
$loggedin = $_SESSION['loggedin'];

if($loggedin===true){

    unset($_SESSION['user']);
    $_SESSION['loggedin']=false;

    header("Location: index.php");
}


?>