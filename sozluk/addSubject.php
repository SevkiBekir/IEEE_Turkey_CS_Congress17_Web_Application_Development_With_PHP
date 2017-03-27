<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 22:20
 */

include_once ("DBug.php");
include_once ("Subject.php");

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
include_once("header.php");
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
            <h3 class="sub-header">Subject Ekle</h3>
            <form  method="post" action="process_addSubject.php">
                <div class="form-group">
                    <input type="text" name="inputSubject" placeholder="Konu İsmi" class="form-control"/>

                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" name="btnAddSubject" value="AddSubject">Ekle</button>
                </div>

            </form>



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

