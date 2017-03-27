<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 00:45
 */

include_once ("Entry.php");
include_once ("DBug.php");

session_start();
$loggedin = false;
if(isset($_SESSION['loggedin']))
    $loggedin = $_SESSION['loggedin'];

if($loggedin===true)//new coming user
{

    if(isset($_POST['btnAddEntry'], $_POST['inputEntry'],$_POST['view'])){
        if($_POST['btnAddEntry']=='AddEntry'){

               ///Add Operations
               $entry = new Entry();
               $result = $entry->addEntry($_POST['view'], $_SESSION['user']['id'],$_POST['inputEntry']);
               if($result)
                    header("Location: index.php?view=".$_POST['view']."");
               else
                   header("Location: addEntry.php");

        }
    }
}else
    header("Location: index.php?view=1");

?>