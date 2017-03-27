<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 00:45
 */

include_once ("User.php");
include_once ("DBug.php");

session_start();
$loggedin = false;
if(isset($_SESSION['loggedin']))
    $loggedin = $_SESSION['loggedin'];

if($loggedin===false)//new coming user
{
    if(isset($_POST['btnSignIn'], $_POST['inputEmail'], $_POST['inputPassword'])){
        if($_POST['btnSignIn']=='Login'){
            ///Login Operations
            $user = new User();
            $result = $user->login($_POST["inputEmail"],$_POST["inputPassword"]);
            new dBug($result);
            if($result){
                $_SESSION['loggedin'] = true;
                $_SESSION['user'] = array();
                $_SESSION['user']['firstname']=$user->firstname;
                $_SESSION['user']['lastname']=$user->lastname;
                $_SESSION['user']['email']=$user->email;
                $_SESSION['user']['id']=$user->uid;
                $loggedin = true;
                $meta = <<< EOF

<meta http-equiv="refresh" content="0; url=index.php">
EOF;
            echo $meta;
            }else
                header("Location: login.php");

        }
    }
    if(isset($_POST['btnRegister'], $_POST['inputEmail'], $_POST['inputPassword'],$_POST['inputPassword2'],$_POST['inputFName'],$_POST['inputLName'])){
        if($_POST['btnRegister']=='Register'){
           if($_POST["inputPassword"] === $_POST["inputPassword2"]){
               ///Register Operations
               $user = new User();
               $result = $user->register($_POST['inputFName'], $_POST['inputLName'],$_POST['inputEmail'],$_POST['inputPassword']);
               if($result)
                   header("Location: login.php");
               else
                   header("Location: register.php");
           }
        }
    }
}else
    header("Location: index.php");

?>