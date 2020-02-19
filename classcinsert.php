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
    $corporation = $_POST['corporation'];
    $homeAddress = $_POST['address'];
    $dateOfBirth = $_POST['birthday'];
    $placeOfRegistration = $_POST['placeofreg'];
    $natureOfBusiness = $_POST['natureofbusiness'];
    $nbspTIN = $_POST['nbsptin'];
    $assessedValueOfProp = $_POST['assessedval'];
    $grossEarningsFromBix = $_POST['grossearn'];

    $sql = "INSERT INTO classc (firstName, middle, lastName, corporation, addressOfCorporation, dateOfRegistration, placeOfRegistration,
    natureOfBusiness, nbspTIN, assessedRealProperty, grossEarnings) VALUES ('$firstName', '$middle', '$lastName', '$corporation',
    '$homeAddress', '$dateOfBirth', '$placeOfRegistration', '$natureOfBusiness', '$nbspTIN', '$assessedValueOfProp', '$grossEarningsFromBix')";


    if (mysqli_query($con, $sql))
        echo 'Data inserted successfully.';
    else
        echo 'Data not inserted successfully.';
?>