<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 25/03/2017
 * Time: 23:01
 */

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

    <title>Kayıt</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">


</head>

<body>

<div class="container">

    <form class="form-signin" method="post" action="process_loginRegister.php">
        <h2 class="form-signin-heading">Kayıt</h2>
        <label for="inputFName" class="sr-only">İsim</label>
        <input type="text" id="inputFName" name="inputFName" class="form-control" placeholder="İsim" required>
        <label for="inputLName" class="sr-only">Soyisim</label>
        <input type="text" id="inputLName" name="inputLName" class="form-control" placeholder="Soyisim" required>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Şifre" required>
        <label for="inputPassword2" class="sr-only">Password</label>
        <input type="password" id="inputPassword2" name="inputPassword2" class="form-control" placeholder="Şifre (Yeniden)" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnRegister" value="Register">Kayıt Ol</button>
    </form>

</div> <!-- /container -->


</body>
</html>

