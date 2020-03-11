<?php
    include 'session.php';

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == "admin")
        header("location: admin_class_a.php");

    $con = mysqli_connect('127.0.0.1','root','');
    mysqli_select_db($con,'cedula');
    if(!$con)
        echo 'ERROR: Not connected to server.';
    if (!mysqli_select_db($con,'cedula'))
        echo 'ERROR: Database not selected.';
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
            <div class="container_all">
                <div class="navbar">
                    <div class="logo-pic"><img src="img/Clogo.png" height="25px" width="25px"></div>
                        <div class="logo"><a href="home.php"><i>manila</i>&nbsp;<b>cedula</b></a></div>
                            <div class="menu">
                            <ul>
                                <li id="btn1"><a class="btn" href=""><b>How&nbsp;to&nbsp;Use</b></a></li>
                                <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> -->
                                <!-- I just set this as comment in order to include "Settings" option. I know this ("Procedure" option) is important.
                                Maybe you could place all five options without affecting the overall design of the panel. -H -->
                                <li><a class="btn" href=""><b>About</b></a></li>
                                <li><a class="btn" href=""><b>Settings</b></a></li> <!-- Change password feature. Yay or  nay? -H-->
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
                        <h1>Class AB: Form Summary</h1>
                        <!-- <h2><i>(Employed & Business Owners)</i></h2><br> -->
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
                                            $homeAddress = $_POST['address'];
                                            $dateOfBirth = $_POST['birthday'];
                                            $citizenship = $_POST['citizenship'];
                                            $placeOfBirth = $_POST['birthplace'];
                                            $civilStatus = $_POST['civilstatus'];
                                            $gender = $_POST['gender'];
                                            $profession = $_POST['profession'];
                                            $taxAccountNo = $_POST['taxaccnum'];
                                            $acrNo = $_POST['acrnum'];
                                            $height = $_POST['height'];
                                            $weight = $_POST['weight'];
                                            $incomeFromRealProp = $_POST['incomerp'];
                                            $grossReceiptsFromBix = $_POST['grossrec'];
                                            $salariesFromProfession = $_POST['salgrossrec'];
                                            date_default_timezone_set("Asia/Brunei");
                                            $dateProcessed = date("Y-m-d");
                                            $timeProcessed = date("H:i:s");
                                            
                                            $sql1 = "INSERT INTO classab (firstName, middle, lastName, homeAddress, dateOfBirth, citizenship, placeOfBirth, civilStatus,
                                            gender, profession, taxAccountNo, ACRNo, heightCentimeters, weightKilograms, realPropertyIncome, grossReceiptsFromBusiness,
                                            salariesFromProfession, dateProcessed, timeProcessed) VALUES ('$firstName', '$middle', '$lastName', '$homeAddress', '$dateOfBirth', '$citizenship',
                                            '$placeOfBirth', '$civilStatus', '$gender', '$profession', '$taxAccountNo', '$acrNo', '$height', '$weight', '$incomeFromRealProp',
                                            '$grossReceiptsFromBix', '$salariesFromProfession', '$dateProcessed', '$timeProcessed')";

                                            if (mysqli_query($con, $sql1))
                                            {
                                                $sql2 = "SELECT COUNT(*) FROM classab WHERE dateProcessed LIKE '$dateProcessed'";
                                                $result = mysqli_query($con, $sql2);
                                                $rows = mysqli_fetch_assoc($result);
                                                $queueingNo = $rows['COUNT(*)'];
    
                                                if($queueingNo/100==1)
                                                    $queueingNo=100;
                                                else if ($queueingNo/100 < 1)
                                                    if ($queueingNo/10 < 1)
                                                        $queue = "00";
                                                    else
                                                        $queue = "0";
                                                else
                                                    $queue = "";
    
                                                $queueingNo = "CAB-" . $queue . $queueingNo%100;
                                                echo "<h1> Queue Number: " . $queueingNo . "</h1>";
                                                echo "<strong>Timestamp: </strong>" . $dateProcessed . " " . $timeProcessed;
                                                echo "<br/><br/>";
                                                echo "<strong>Full Name: </strong>" . $firstName . " " . $middle . " " . $lastName;
                                                echo "<br/>";
                                                echo "<strong>Home Address: </strong>" . $homeAddress;
                                                echo "<br/>";
                                                echo "<strong>Date of Birth: </strong>" . $dateOfBirth;
                                                echo "<br/>";
                                                echo "<strong>Citizenship: </strong>" . $citizenship;
                                                echo "<br/>";
                                                echo "<strong>Place of Birth: </strong>" . $placeOfBirth;
                                                echo "<br/>";
                                                echo "<strong>Civil Status: </strong>" . $civilStatus;
                                                echo "<br/>";
                                                echo "<strong>Gender: </strong>" . $gender;
                                                echo "<br/>";
                                                echo "<strong>Profession: </strong>" . $profession;
                                                echo "<br/>";
                                                echo "<strong>Taxpayer's Account No.: </strong>" . $taxAccountNo;
                                                echo "<br/>";
                                                echo "<strong>ACR No.: </strong>" . (($acrNo == "") ? "N/A" : $acrNo);
                                                echo "<br/>";
                                                echo "<strong>Height: </strong>" . $height . " cm";
                                                echo "<br/>";
                                                echo "<strong>Weight: </strong>" . $weight . " kgs";
                                                echo "<br/>";
                                                echo "<strong>Income from Real Property: </strong>" . " PHP " . sprintf("%.2f", $incomeFromRealProp);
                                                echo "<br/>";
                                                echo "<strong>Gross receipts/earnings derived from business during the preceding year: </strong>" . " PHP " . sprintf("%.2f", $grossReceiptsFromBix);
                                                echo "<br/>";
                                                echo "<strong>Salaries/gross receipts/earnings derived from exercise of profession/pursuit of any occupation: </strong>" . " PHP " . sprintf("%.2f", $salariesFromProfession);

                                                $sql3 = "SET @count = 0";
                                                $sql4 = "UPDATE classab SET classab.id = @count:= @count + 1";
                                                $sql5 = "ALTER TABLE classab AUTO_INCREMENT = 1";
                                                mysqli_query($con, $sql3);
                                                mysqli_query($con, $sql4);
                                                mysqli_query($con, $sql5);
                                            }
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