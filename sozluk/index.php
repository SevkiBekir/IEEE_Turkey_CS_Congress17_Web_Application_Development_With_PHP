<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 22:20
 */

$view = 1;
if(isset($_GET["view"])){
    $view = $_GET["view"];
}

include_once ("DBug.php");
include_once ("Subject.php");
include_once ("Entry.php");

session_start();
$user = $_SESSION['user'];

$loggedin=false;
if(isset($_SESSION['loggedin']))
    $loggedin = $_SESSION['loggedin'];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CSCON Sözlük</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">


</head>

<body>

<?php
include_once ("header.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <?php
                $subjects = listAllSubjects();
                foreach ($subjects as $subject){
                   echo "<li><a href=\"index.php?view=$subject->id\">$subject->name</a></li>";
                }
                ?>

            </ul>

        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h3 class="sub-header">Entry Başlık</h3>
            <?php
            $entries = listEntries($view);
            if($entries)
                foreach ($entries as $entry){


                ?>



            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo $entry[0]->content?>
                </div>
                <div class="panel-footer">Yazar: <?php echo $entry[1]->firstname." ".$entry[1]->lastname?></div>
            </div>
                <?php
            }

            if($loggedin==true){
            ?>

            <div class="panel panel-default">
                <div class="panel-body">
                    <form  method="post" action="process_addEntry.php">
                        <div class="form-group">
                            <textarea name="inputEntry" id="mytext" placeholder="Entry İçerik" class="form-control" onclick="document.getElementById('mytext').innerHTML='';"> Entry Yaz</textarea>
                            <input type="hidden" name="view" value="<?php echo $view ?>">

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" name="btnAddEntry" value="AddEntry">Ekle</button>
                        </div>

                    </form>
                </div>
            </div>

            <?php

            }
            ?>

        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

