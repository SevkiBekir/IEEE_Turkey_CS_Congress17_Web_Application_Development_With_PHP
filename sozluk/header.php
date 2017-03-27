<?php
/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 02:31
 */

?>


<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CSCON Sözlük</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-right: 2%">
                <?php
                if($loggedin===true){


                    ?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user["firstname"]." ".$user["lastname"]; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="addSubject.php">Konu Ekle</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>


                    <?php
                }else
                {
                    ?>

                    <li><a href="register.php" class="btn">Kayıt Ol</a> </li>
                    <form class="navbar-form navbar-right" method="post" action="process_loginRegister.php">
                        <div class="form-group">
                            <input type="text" id="inputEmail" name="inputEmail" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" id="inputPassword" name="inputPassword" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success" name="btnSignIn" value="Login">Giriş Yap</button>
                    </form>
                    <?php

                }
                ?>

            </ul>
        </div>
    </div>
</nav>
