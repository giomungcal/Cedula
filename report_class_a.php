<?php
    include 'session.php';

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == "admin")
        header("location: admin_class_a.php");

    $con = mysqli_connect('localhost','root','');
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
                                <li id="btn1"><a class="btn"><b>How&nbsp;to&nbsp;Use</b></a></li>
                                <!-- <li><a class="btn" href=""><b>Procedure</b></a></li> -->
                                <!-- I just set this as comment in order to include "Settings" option. I know this ("Procedure" option) is important.
                                Maybe you could place all five options without affecting the overall design of the panel. -H -->
                                <li><a class="btn"><b>About</b></a></li>
                                <li><a class="btn"><b>Settings</b></a></li> <!-- Change password feature. Yay or  nay? -H-->
                                <li><a class="btn"><b>Logout</b></a></li>
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
                                            $placeOfBirth = $_POST['birthplace'];
                                            $civilStatus = $_POST['civilstatus'];
                                            $gender = $_POST['gender'];
                                            date_default_timezone_set("Asia/Manila");
                                            $dateProcessed = date("Y-m-d");
                                            $timeProcessed = date("H:i:s");

                                            $checkDuplicateData =  "SELECT * FROM classa
                                                                    WHERE firstName='$firstName'
                                                                    AND middle='$middle'
                                                                    AND lastName='$lastName'
                                                                    AND homeAddress='$homeAddress'
                                                                    AND dateOfBirth='$dateOfBirth'
                                                                    AND placeOfBirth='$placeOfBirth'
                                                                    AND civilStatus='$civilStatus'
                                                                    AND gender='$gender'
                                                                    AND dateProcessed='$dateProcessed'";

                                            $testResult = mysqli_query($con, $checkDuplicateData);
                                            $duplicateDataCount = mysqli_num_rows($testResult);

                                            if ($duplicateDataCount > 0)
                                            {
                                            ?>
                                                <script type='text/javascript'>
                                                    alert('The following data are already inserted into the database.\nPlease click OK to go back to the previous page.');
                                                </script>
                                            <?php
                                                $query1 = "SELECT * FROM classa ORDER BY id DESC LIMIT 1";
                                                $resulting = mysqli_query($con, $query1);
                                                $rowstemp = mysqli_fetch_assoc($resulting);
                                                echo "<h1> Queue Number: " . substr($rowstemp['queueNo'], 2, -9) . "</h1>";
                                                echo "<strong>Timestamp: " . $rowstemp['dateProcessed']. " " . $rowstemp['timeProcessed'] . "</strong>";
                                                echo "<br/><br/>";
                                                $_SESSION['dateProcessedForPrinting'] = $rowstemp['dateProcessed'];
                                                $_SESSION['timeProcessedForPrinting'] = $rowstemp['timeProcessed'];
                                            }
                                            else
                                            {
                                                $sql2 = "SELECT COUNT(*) FROM classa WHERE dateProcessed LIKE '$dateProcessed'";
                                                $result = mysqli_query($con, $sql2);
                                                $rows = mysqli_fetch_assoc($result);
                                                $queueingNo = $rows['COUNT(*)']+1;

                                                if(((float)$queueingNo/100) >= 1)
                                                    $queue = "";
                                                else if (((float)$queueingNo/100) >= 0.1)
                                                    $queue = "0";
                                                else
                                                    $queue = "00";

                                                $queueing = "A-" . $queue . $queueingNo . "-" . date("mdY");

                                                echo "<h1> Queue Number: " . $queue . $queueingNo . "</h1>";
                                                echo "<strong>Timestamp: </strong>" . $dateProcessed . " " . $timeProcessed;
                                                echo "<br/><br/>";

                                                $sql1 = "INSERT INTO classa (queueNo, firstName, middle, lastName, homeAddress, dateOfBirth, placeOfBirth,
                                                civilStatus, gender, dateProcessed, timeProcessed) VALUES ('$queueing', '$firstName', '$middle', '$lastName', '$homeAddress', '$dateOfBirth',
                                                '$placeOfBirth', '$civilStatus', '$gender', '$dateProcessed', '$timeProcessed')";
                                                mysqli_query($con, $sql1);
                                                $_SESSION['dateProcessedForPrinting'] = $rowstemp['dateProcessed'];
                                                $_SESSION['timeProcessedForPrinting'] = $rowstemp['timeProcessed'];
                                            }

                                                echo "<strong>Full Name: </strong>" . $firstName . " " . $middle . " " . $lastName;
                                                echo "<br/>";
                                                echo "<strong>Home Address: </strong>" . $homeAddress;
                                                echo "<br/>";
                                                echo "<strong>Date of Birth: </strong>" . $dateOfBirth;
                                                echo "<br/>";
                                                echo "<strong>Place of Birth: </strong>" . $placeOfBirth;
                                                echo "<br/>";
                                                echo "<strong>Civil Status: </strong>" . $civilStatus;
                                                echo "<br/>";
                                                echo "<strong>Gender at Birth: </strong>" . $gender;
                                                echo "<br/><br/>";

                                                $sql3 = "SET @count = 0";
                                                $sql4 = "UPDATE classa SET classa.id = @count:= @count + 1";
                                                $sql5 = "ALTER TABLE classa AUTO_INCREMENT = 1";                                                
                                                mysqli_query($con, $sql3);
                                                mysqli_query($con, $sql4);
                                                mysqli_query($con, $sql5);
                                             //else
                                             //    echo "Your data was unsuccessfully uploaded to the database. Please reach out our staff regarding this matter.";
                                    }
                                    ?>
                                    </p>
                            <p align="center">
                            <br>

                            <!-- ETO HEHER YUNG PART NA KAPAG CINLICK KO YUNG PRINT, IBANG PAGE YUNG MAGPPRINT HEHE pero idk kung pwede ichange yung content ng html tho-->
                            <!-- good thing php file is okay here-->
                            <iframe src="queueing_tix_a.php" style="display:none;" name="frame"></iframe>
                            <a class="printbtn" onclick="frames['frame'].print()" value="printletter" target="blank" style="cursor: pointer" align="center">Print</a>
                            </p>
                        </div><br> 
                    </div>
                </div>
            </div>
        </div>
        <br/><br/><br/>
<script type="text/javascript">

</script>
    </body>
</html>