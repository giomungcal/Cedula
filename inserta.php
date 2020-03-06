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

    $sql = "INSERT INTO classa (firstName, middle, lastName, homeAddress, dateOfBirth, placeOfBirth, civilStatus, gender) VALUES ('$firstName', '$middle', '$lastName', '$homeAddress', '$dateOfBirth', '$placeOfBirth', '$civilStatus', '$gender')";

    if (mysqli_query($con, $sql))
        echo 'Data inserted successfully.';
    else
        echo 'Data not inserted successfully.';
?> 