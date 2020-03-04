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
        <div class="mainclassa">
            <div class="container">
                <div class="navbar">
                    <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                    <div class="logo"><a href="index.php"><i>manila</i>&nbsp;<b>cedula</b></a></div>
                <div class="menu">
                    <ul>
                        <li id="btn1"><a class="btn" href=""><b>How&nbsp;to&nbsp;Use</b></a></li>
                        <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> -->
                        <!-- I just set this as comment in order to include "Settings" option. I know this ("Procedure" option) is important.
                        Maybe you could place all five options without affecting the overall design of the panel. -H -->
                        <li><a class="btn" href=""><b>About</b></a></li>
                        <li><a class="btn" href=""><b>Settings</b></a></li> <!-- Change password feature. Yay or  nay? -H-->
                        <!-- <li><a class="btn" href="logout.php"><b>Logout (<?php echo $login_session; ?>)</b></a></li> -->
                        <!--
                        <li id="btn1"><a class="btn" href=""><b>How&nbsp;to&nbsp;Use</b></a></li>
                        <li><a class="btn" href=""><b>Procedure</b></a></li>
                        <li><a class="btn" href=""><b>About</b></a></li>
                        -->
                    </ul>
                </div>
            </div>
            </div>
            <div class="maincontent_form">
                <h1>Class A: Form Summary</h1>
                <!-- <h2><i>(Unemployed)</i></h2><br> -->
                <br>
                <div class="menu_report_a">
                    <?php
    include ('session.php');

    if(!isset($_SESSION['login_user']))
        header("location: index.php");

    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con)
        echo 'Not connected to server.';

    if (!mysqli_select_db($con,'cedula'))
        echo 'Database not selected.';

    $firstName = $_POST['fname'];
    $middle = $_POST['minitial'];
    $lastName = $_POST['lname'];
    $homeAddress = $_POST['address'];
    $dateOfBirth = $_POST['birthday'];
    $placeOfBirth = $_POST['birthplace'];
    $civilStatus = $_POST['civilstatus'];
    $gender = $_POST['gender'];

        echo "<h1>Queue Number: </h1>";
        echo "<br><strong>Full Name: </strong>" . $firstName . " " . $middle . " " . $lastName;
        echo "<br/>";
        echo "<strong>Home Address: </strong>" . $homeAddress;
        echo "<br/>";
        echo "<strong>Date of Birth: </strong>" . $dateOfBirth;
        echo "<br/>";
        echo "<strong>Place of Birth: </strong>" . $placeOfBirth;
        echo "<br/>";
        echo "<strong>Civil Status: </strong>" . $civilStatus;
        echo "<br/>";
        echo "<strong>Gender: </strong>" . $gender;
?>
        </p>

        <p align="center">
            <br><a class="editbtn" style="cursor: pointer"  align="center">Edit</a>
            <a class="printbtn" target="blank" style="cursor: pointer" onclick="window.print();" align="center">Print</a>
        </p>
                </div>
            </div>
        </div>
    </body>
</html>