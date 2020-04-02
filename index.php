<?php
    include 'login.php';

    if (isset($_SESSION['login_user']))
    {
        if ($_SESSION['login_user'] == "user")
            header("location: home.php");
        else if ($_SESSION['login_user'] == "admin")
            header("location: admin_class_a.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meat name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Manila City Hall: Cedula</title>
        <link rel="stylesheet" href="style.css" />
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat|Muli|Roboto&display=swap');
        </style>
    </head>
    <body>
        <div class="main_login">
            <div class="logincontainer">
                <div class="logo-pic" style="text-align: center;"><img src="img/Clogo.png" height="60px" width="60px"></div>
                 <h2 style="text-align: center;"></h2><br><br>
                <div class="loginform">
                    <div class="logincontainerx" style="width: 100%;">
                        <div class="loginboxes" style="width: 100%;">
                            <form id="login" action="" method="post">
                            <input type="text" id="username" name="username" required placeholder="Username"><br>
                            <input type="password" id="password" name="password" required placeholder="Password"><br>
                            <div>
                                <input type="submit" id="submit" name ="submit" class="submitlogin" value="Log In">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <span align="center"><?php echo $error; ?></span> 
                <p id="res"></p>
            </div>
        </div>
    </body>
</html>