<?php
    include 'session.php';

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == "admin")
        header("location: admin_class_a.php");
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
        <div class="mainclassa">
            <div class="container">
                <div class="navbar">
                    <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                        <div class="logo"><a href="home.php"><i>manila</i>&nbsp;<b>cedula</b></a></div>
                            <div class="menu">
                            <ul>
                                <li id="btn1"><a class="btn" href="#"><b>How&nbsp;to&nbsp;Use</b></a></li>
                                <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> -->
                                <!-- I just set this as comment in order to include "Settings" option. I know this ("Procedure" option) is important.
                                Maybe you could place all five options without affecting the overall design of the panel. -H -->
                                <li><a class="btn" href="#"><b>About</b></a></li>
                                <li><a class="btn" href="#"><b>Settings</b></a></li> <!-- Change password feature. Yay or  nay? -H-->
                                <li><a class="btn" href="logout.php"><b>Logout</b></a></li>
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
                        <h1>Class C: Form Summary</h1>
                        <!-- <h2><i>(Corporation)</i></h2><br> -->
                        <br>
                                    <div class="menu_report_a">
                                    <p align="center">
                                    <?php
                                        if (!isset($_POST['fname']))
                                        {
                                            if ($_SESSION['currentPage'] == 'home')
                                                header("location: home.php");
                                            else if ($_SESSION['currentPage'] == 'form_class_a')
                                                header("location: form_class_a.php");
                                            else if ($_SESSION['currentPage'] == 'form_class_ab')
                                                header("location: form_class_ab.php");
                                            else if ($_SESSION['currentPage'] == 'form_class_c')
                                                header("location: form_class_c.php");
                                        }
                                        else
                                        {
                                            $firstName = $_POST['fname'];
                                            $middle = $_POST['minitial'];
                                            $lastName = $_POST['lname'];
                                            $corporation = $_POST['corporation'];
                                            $homeAddress = $_POST['address'];
                                            $dateOfBirth = $_POST['birthday'];
                                            $placeOfRegistration = $_POST['placeofreg'];
                                            $natureOfBusiness = $_POST['natureofbusiness'];
                                            $nbspTIN = $_POST['nbsptin'];
                                            $assessedValueOfProp = $_POST['assessedval'];
                                            $grossEarningsFromBix = $_POST['grossearn'];
                                            date_default_timezone_set("Asia/Brunei");
                                            $dateAndTime = date("Y-m-d H:i:s");
                                            
                                            $con = mysqli_connect('127.0.0.1','root','');

                                            if(!$con)
                                                echo 'Not connected to server.';
                                            if (!mysqli_select_db($con,'cedula'))
                                                echo 'Database not selected.';

                                            $sql = "INSERT INTO classc (firstName, middle, lastName, corporation, addressOfCorporation, dateOfRegistration, placeOfRegistration,
                                            natureOfBusiness, nbspTIN, assessedRealProperty, grossEarnings, dateAndTimeProcessed) VALUES ('$firstName', '$middle', '$lastName', '$corporation',
                                            '$homeAddress', '$dateOfBirth', '$placeOfRegistration', '$natureOfBusiness', '$nbspTIN', '$assessedValueOfProp', '$grossEarningsFromBix', '$dateAndTime')";                                        

                                        if (mysqli_query($con, $sql))
                                        {
                                            echo "<h1>Queue Number: </h1>";
                                            echo "<br><strong>President/Authorized Representative: </strong>" . $firstName . " " . $middle . " " . $lastName;
                                            echo "<br/>";
                                            echo "<strong>Corporation: </strong>" . $corporation;
                                            echo "<br/>";
                                            echo "<strong>Home Address: </strong>" . $homeAddress;
                                            echo "<br/>";
                                            echo "<strong>Date of Birth: </strong>" . $dateOfBirth;
                                            echo "<br/>";
                                            echo "<strong>Place of Registration: </strong>" . $placeOfRegistration;
                                            echo "<br/>";
                                            echo "<strong>Nature of Business: </strong>" . $natureOfBusiness;
                                            echo "<br/>";
                                            echo "<strong>NBSP TIN: </strong>" . $nbspTIN;
                                            echo "<br/>";
                                            echo "<strong>Total Assessed Value of Real Property: </strong>" . "PHP " . $assessedValueOfProp;
                                            echo "<br/>";
                                            echo "<strong>Total Gross Earnings from Business: </strong>" . "PHP " . $grossEarningsFromBix;
                                            echo "<br/>";
                                            echo "<strong>Date and time processed: </strong>" . $dateAndTime;                                        }
                                        else
                                            echo "Your data was unsuccessfully uploaded to the database. Please reach out our staff regarding this matter.";
                                        }
                                    ?>
                                    </p>
                            <p align="center">
                            <br>
                            <a class="printbtn" target="blank" style="cursor: pointer" onclick="window.print();" align="center">Print</a>
                        </p>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
        <br/><br/><br/>
    </body>
</html>