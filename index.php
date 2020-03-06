<?php
    include('login.php');

    if (isset($_SESSION['login_user']))
        header('location: home.php');
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
                <!-- <h2 style="text-align: center;">Administrator Login</h2><br> --><br><br>
                <div class="loginform">
                    <form id="login" action="" method="post">
                        <input type="text" id="username" name="username" required placeholder="Username"><br>
                        <input type="password" id="password" name="password" required placeholder="Password"><br>
                        <div style="text-align: center;"><input type="submit" id="submit" name ="submit" class="submitlogin" value="Log In"></div>
                    </form>
                </div>
                <span align="center"><?php echo $error; ?></span> 
                <p id="res"></p>
            </div>
        </div>
    </body>
</html>