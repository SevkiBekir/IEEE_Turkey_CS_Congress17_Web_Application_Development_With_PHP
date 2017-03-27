<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 00:45
 */

include_once ("Subject.php");
include_once ("DBug.php");

session_start();
$loggedin = false;
if(isset($_SESSION['loggedin']))
    $loggedin = $_SESSION['loggedin'];

if($loggedin===true)//new coming user
{

    if(isset($_POST['btnAddSubject'], $_POST['inputSubject'])){
        if($_POST['btnAddSubject']=='AddSubject'){

               ///Add Operations
               $user = new Subject();
               $result = $user->addSubject($_POST['inputSubject'], $_SESSION['user']['id']);
               if($result)
                   header("Location: index.php");
               else
                   header("Location: addSubject.php");

        }
    }
}else
    header("Location: index.php");

?>