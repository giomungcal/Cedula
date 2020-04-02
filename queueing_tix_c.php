<?php
    include 'session.php';

    $_SESSION['currentPage'] = 'queueing_tix_ab';

    if(!isset($_SERVER['HTTP_REFERER']))
        exit;

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
    if($_SESSION['login_user'] == 'admin')
        header("location: admin_class_c.php");

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'cedula');
    if(!$con)
        echo 'ERROR: Not connected to server.';
    if (!mysqli_select_db($con,'cedula'))
        echo 'ERROR: Database not selected.';

    $date=$_SESSION["dateProcessedClassCPrint"];
    $time=$_SESSION["timeProcessedClassCPrint"];
    $newquery="SELECT * FROM classc WHERE dateProcessed='$date' AND timeProcessed='$time'";
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
                <img src="img/Clogo.png" height="20px" width="20px">&nbsp;
                <?php
                    if($rowOfData = mysqli_fetch_array($sortedTable))
                        echo "Your queueing no is " . "<b>" . substr($rowOfData['queueNo'], 2, -9) ."</b>. " . "Kindly wait for your turn.";
                        // ATTN: Engr Mungcal. This is just a test text. Please replace the statement above with a better and good-to-read statement/
                ?>
                <br/><br/>
                </div>
            <div class="payment_amt" style="font-size: 20px;">
<?php


?>

                <b>Php <?php echo sprintf("%.2f", $_SESSION["communityTax"]) ?></b>
            </div>
            <div class="procedure" style="font-size: 15px;">
                Please prepare the following:
                    <div class="procedure_list" style="font-size: 12px;">
                        <b>1. Valid ID.<br>
                        2. Appropriate Proof of Income and/or Assessment.<br>
                        3. Exact amount for faster transaction.<br></b>
                        Wait for your number to appear on the queueing screen.<br>
                        <a style="font-size: 13px;"><i>Thank you, Manileño!</i></a>
                        <br/><br/><br/><br/><br/>
                    </div>
            </div>

            <?php
            echo "<strong>President/Authorized Representative: </strong>" . $rowOfData['firstName'] . " " . $rowOfData['middle'] . " " . $rowOfData['lastName'];
            echo "<br/>";
            echo "<strong>Corporation: </strong>" . $rowOfData['corporation'];
            echo "<br/>";
            echo "<strong>Home Address: </strong>" . $rowOfData['addressOfCorporation'];
            echo "<br/>";
            echo "<strong>Date of Birth: </strong>" . $rowOfData['dateOfRegistration'];
            echo "<br/>";
            echo "<strong>Place of Registration: </strong>" . $rowOfData['placeOfRegistration'];
            echo "<br/>";
            echo "<strong>Nature of Business: </strong>" . $rowOfData['natureOfBusiness'];
            echo "<br/>";
            echo "<strong>NBSP TIN: </strong>" . $rowOfData['nbspTIN'];
            echo "<br/>";
            echo "<strong>Assessed value of real property: </strong>" . "PHP " . sprintf("%.2f", $rowOfData['assessedRealProperty']);
            echo "<br/>";
            echo "<strong>Gross earnings from business: </strong>" . "PHP " . sprintf("%.2f", $rowOfData['grossEarnings']);
            echo "<br/><br/>";
    // design up to ui/ux developer

        ?>
      </body>
</html>