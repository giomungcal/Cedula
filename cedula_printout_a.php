<?php
    include 'session.php';

    $_SESSION['currentPage'] = 'cedula_printout';

    if(!isset($_SERVER['HTTP_REFERER']))
        exit;

    if(!isset($_SESSION['login_user']))
        header("location: index.php");
//    if($_SESSION['login_user'] == 'admin')
//        header("location: admin_class_a.php");

    $con = mysqli_connect('localhost','root','');
    mysqli_select_db($con,'cedula');

    if(!$con)
        echo 'ERROR: Not connected to server.';
    if (!mysqli_select_db($con,'cedula'))
        echo 'ERROR: Database not selected.';

    $queueNum = $_GET['queueNum'];
    $newquery="SELECT * FROM classa WHERE queueNo='$queueNum'";
    $fetchData = mysqli_query($con, $newquery);
    $row = mysqli_fetch_array($fetchData);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meat name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Cedula Print-out</title>
    </head>
    <head>
        <style type="text/css">
            @media print {
                body {-webkit-print-color-adjust: exact;}

                button{
                  display: none !important;
                }
            }
          .mytable {
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            font-size: 10px;
          }
          .mytable-head {
            border: 1px solid black;
            margin-bottom: 0;
            /* padding: 10px 0 10px; */
          }
          .mytable-head td {
            border: 1px solid black;
            padding-top: 10px;
            padding-bottom: 10px;
          }
          .ctc{
              text-align: center;
          }
          .wtf{
              padding-left: 20px;
              text-align: left;
          }
          .individual{
              text-align: center;
              background-color: black;
              color: white;
          }
          .mytable-body {
            border: 1px solid black;
            border-top: 0;
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
            padding-bottom: 0;
          }
          .mytable-body td {
            border: 1px solid black;
            border-top: 0;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 5px;
          }
          .mytable-footer {
            border: 1px solid black;
            border-top: 0;
            margin-top: 0;
            padding-top: 0;
          }
          .mytable-footer td {
            border: 1px solid black;
            border-top: 0;
          }
          p{
            font-size: 10px;
            line-height: 0px;
            font-weight: bold;
          }
        </style>
      </head>
      
      <body>
        <table class="mytable mytable-head">
          <tr>
            <td class="ctc" width="40%" style="font-size: 15px;"><b>COMMUNITY TAX CERTIFICATE</b></td>
            <td class="individual" width="20%" style="font-size: 15px;"><b>INDIVIDUAL</b></td>
            <td class="wtf" width="40%" style="font-size: 15px;"><b>CCI2020</b></td>
          </tr>
        </table>
        <table class="mytable mytable-body">
          <tr>
            <td width="10%" style="font-size: 5px;">YEAR:<p> <?php echo substr($row['dateProcessed'],0,-6); ?> </p></td>
            <td width="40%" style="font-size: 5px;">PLACE OF ISSUE (City/Mun/Prov):<p> Manila, Philippines </p></td>
            <td width="25%" style="font-size: 5px;">DATE ISSUED:<p> <?php echo date("M. j", strtotime($row['dateProcessed'])); ?> </p></td>
            <td width="35%" style="text-align: center;"><b>TAXPAYER'S COPY</b></td>
          </tr>
        </table>
        <table class="mytable mytable-body">
          <tr>
            <td width="65%" style="font-size: 5px;">NAME:<p> <?php echo $row['firstName']." ".$row['middle']. " ".$row['lastName'];?> </p></td>
            <td width="35%" style="font-size: 5px;">TIN (If Any):<p> N/A </p></td>
          </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="75%" style="font-size: 5px;">ADDRESS:<p> <?php echo $row['homeAddress'];?> </p></td>
              <td width="25%" style="font-size: 5px;">SEX:<p> <?php echo $row['gender']; ?> </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="10%" style="font-size: 5px;">CITIZENSHIP:<p> Filipino </p></td>
              <td width="30%" style="font-size: 5px;">ICR NO. (If an Alien):<p> N/A </p></td>
              <td width="40%" style="font-size: 5px;">PLACE OF BIRTH:<p> <?php echo $row['placeOfBirth']; ?> </p></td>
              <td width="20%" style="font-size: 5px;">HEIGHT:<p>  </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%" style="font-size: 5px;">CIVIL STATUS:<p> <?php echo $row['civilStatus']; ?> </p></td>
              <td width="20%" style="font-size: 5px;">DATE OF BIRTH:<p> <?php echo date("M. j, Y", strtotime($row['dateOfBirth'])); ?> </p></td>
              <td width="20%" style="font-size: 5px;">WEIGHT:<p>  </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%" style="font-size: 5px;">PROFESSION/OCCUPATION/BUSINESS:<p> N/A </p></td>
              <td width="20%" style="text-align: center; font-size: 8.5px;">TAXABLE<br>AMOUNT</td>
              <td width="20%" style="text-align: center; font-size: 8.5px;"" >COMMUNITY<br>TAX DUE</td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%">A. BASIC COMMUNITY TAX (₱10.00) Voluntary of Exempted (₱1.00)</td>
              <td width="20%" style="background-color: rgb(200, 200, 200);"></td>
              <td width="20%" style="text-align: center;"> <p> ₱ 10.00 </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%">B. ADDITIONAL COMMUNITY TAX (Tax not exceed ₱5,000.00)</td>
              <td width="20%" style="background-color: rgb(200, 200, 200);"></td>
              <td width="20%" style="background-color: rgb(200, 200, 200);"></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%" style="padding-left: 15px; font-size: 7px;" >1. GROSS RECEIPTS OR EARNINGS DERIVED FROM BUSINESS DURING THE PRECEDING YEAR. (₱1.00 for every ₱1,000.00)</td>
              <td width="20%" style="text-align: center;"><p> ₱ 0.00 </p></td>
              <td width="20%" style="text-align: center;"><p> ₱ 0.00 </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%" style="padding-left: 15px; font-size: 7px;">2. SALARIES OR GROSS RECEIPTS OR EARNINGS DERIVED FROM EXERCISE OF PROFESSION OR PURSUIT OF ANY OCCUPATION. (₱1.00 for every ₱1,000.00)</td>
              <td width="20%" style="text-align: center;"><p> ₱ 0.00 </p></td>
              <td width="20%" style="text-align: center;"><p> ₱ 0.00 </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="60%" style="padding-left: 15px; font-size: 7px;">3. INCOME FROM REAL PROPERTY  (₱1.00 for every ₱1,000.00)</td>
              <td width="20%" style="text-align: center;"><p> ₱ 0.00 </p></td>
              <td width="20%" style="text-align: center;"><p> ₱ 0.00 </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="15%" style="text-align: center;"><b>Right Thumb Print:</b></td>
              <td width="35%" >TAXPAYER'S SIGNATURE</td>
              <td width="25%"><p>TOTAL: ₱ 10.00 </p></td>
              <td width="25%"><p>INTEREST: 0.00% </p></td>
            </tr>
        </table>
        <table class="mytable mytable-body">
            <tr>
              <td width="15%"><br><br></td>
              <td width="35%" style="text-align: center;"><br><br><br> __________________________________<br>MUNICIPAL/CITY TREASURER</td>
              <td width="25%">TOTAL AMOUNT PAID (in words):<p>  </p><br><br></td>
              <td width="25%"><p>₱ 0.00 </p><br><br></td>
            </tr>
        </table>
        <br>
        <div style="display: flex;"><button style="margin: auto;" onclick="window.print()">Print</button></div>
      </body>
</html>