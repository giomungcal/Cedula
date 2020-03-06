<html>
<head>
    <title>Manila City Hall: Cedula</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Muli|Roboto&display=swap');
    </style>
</head>
<body>
    <div class="mainreport">
    <div class="content_report">
    <div class="report_classa">
    <br/><br/><br/>
    <p align="center">
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

 
        echo "Full Name: " . $firstName . " " . $middle . " " . $lastName;
        echo "<br/>";
        echo "Home Address: " . $homeAddress;
        echo "<br/>";
        echo "Date of Birth: " . $dateOfBirth;
        echo "<br/>";
        echo "Place of Birth: " . $placeOfBirth;
        echo "<br/>";
        echo "Civil Status: " . $civilStatus;
        echo "<br/>";
        echo "Gender: " . $gender;
?>
        </p>

</div>
</div>
</div>

<br/><br/><br/>
<p align="center">
<a class="btn" target="blank" style="cursor: pointer" onclick="window.print();" align="center">Print</a>
</p>
</body>
</html>