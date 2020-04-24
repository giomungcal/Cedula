<?php
    include 'session.php';

    $_SESSION['currentPage'] = 'queueing_tix_a';

    if(!isset($_SERVER['HTTP_REFERER']))
        exit;

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == 'admin')
        header("location: admin_class_a.php");

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'cedula');

    if(!$con)
        echo 'ERROR: Not connected to server.';
    if (!mysqli_select_db($con,'cedula'))
        echo 'ERROR: Database not selected.';

    $date=$_SESSION["dateProcessedForPrinting"];
    $time=$_SESSION["timeProcessedForPrinting"];
    $newquery="SELECT * FROM classa WHERE dateProcessed='$date' AND timeProcessed='$time'";
    $sortedTable = mysqli_query($con, $newquery);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meat name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Queueing Ticket</title>
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Muli|Roboto&display=swap');
    </style>
      <body>
            <div class="queue_number" style="font-size: 25px; font-family: Roboto;">
                <img src="img/Clogo-Blue.png" height="20px" width="20px">&nbsp;
                <?php
                    if($rowOfData = mysqli_fetch_array($sortedTable))
                        echo "Your queueing no is " . "<b>" . substr($rowOfData['queueNo'], 2, -9) ."</b>. " . "Kindly wait for your turn.";
                ?>
                <br/><br/>
            </div>
            <div class="payment_amt" style="font-size: 20px;">
                <b>Php 10.00</b> <!-- fixed based on Help section -->
            </div>
            <div class="procedure" style="font-size: 15px;">
                Please prepare the following: <!-- Added "please" para may respect-->
                    <div class="procedure_list" style="font-size: 12px;">
                        <b>1. Valid ID.<br>
                        2. Exact amount for faster transaction.<br></b>
                        Wait for your number to appear on the queueing screen.<br>
                        <a style="font-size: 13px;"><i>Thank you, Manileño!</i></a>
                        <br/><br/><br/><br/><br/>
                    </div>
            </div>

            <?php

                $newquery1="SELECT * FROM classa WHERE dateProcessed='$date' AND timeProcessed='$time'";
                $sortedTable1 = mysqli_query($con, $newquery1);
                $rowOfData = mysqli_fetch_array($sortedTable1);
                echo "<strong>Full Name: </strong>" . $rowOfData['firstName'] . " " . $rowOfData['middle'] . " " . $rowOfData['lastName'];
                echo "<br/>";
                echo "<strong>Home Address: </strong>" . $rowOfData['homeAddress'];
                echo "<br/>";
                echo "<strong>Date of Birth: </strong>" . $rowOfData['dateOfBirth'];
                echo "<br/>";
                echo "<strong>Place of Birth: </strong>" . $rowOfData['placeOfBirth'];
                echo "<br/>";
                echo "<strong>Civil Status: </strong>" . $rowOfData['civilStatus'];
                echo "<br/>";
                echo "<strong>Gender at Birth: </strong>" . $rowOfData['gender'];
                echo "<br/><br/>";
            ?>
      </body>
</html>