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
    $citizenship = $_POST['citizenship'];
    $placeOfBirth = $_POST['birthplace'];
    $civilStatus = $_POST['civilstatus'];
    $gender = $_POST['gender'];
    $profession = $_POST['profession'];
    $taxaccnum = $_POST['taxaccnum'];
    $acrnum = $_POST['acrnum'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $incomerp = $_POST['incomerp'];
    $grossrec = $_POST['grossrec'];
    $salgrossrec = $_POST['salgrossrec'];

    $sql = "INSERT INTO classab (firstName, middle, lastName, homeAddress, dateOfBirth, citizenship, placeOfBirth, civilStatus,
    gender, profession, taxAccountNo, ACRNo, heightCentimeters, weightKilograms, realPropertyIncome, grossReceiptsFromBusiness,
    salariesFromProfession) VALUES ('$firstName', '$middle', '$lastName', '$homeAddress', '$dateOfBirth', '$citizenship',
    '$placeOfBirth', '$civilStatus', '$gender', '$profession', '$taxaccnum', '$acrnum', '$height', '$weight', '$incomerp', '$grossrec',
    '$salgrossrec')";

    if (mysqli_query($con, $sql))
        echo 'Data inserted successfully.';
    else
        echo 'Data not inserted successfully.';
?>