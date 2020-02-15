<?php
    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con)
    {
        echo 'Not Connected to Server';
    }

    if (!mysqli_select_db($con,'classa'))
    {
        echo 'Database Not Selected';
    }

    $firstName = $_POST['fname'];
    $middle = $_POST['minitial'];
    $lastName = $_POST['lname'];
    $homeAddress = $_POST['address'];
    $dateOfBirth = $_POST['birthday'];
    $placeOfBirth = $_POST['birthplace'];
    $civilStatus = $_POST['civilstatus'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO applicants (firstName, middle, lastName, homeAddress, dateOfBirth, placeOfBirth, civilStatus, gender) VALUES ('$firstName', '$middle', '$lastName', '$homeAddress', '$dateOfBirth', '$placeOfBirth', '$civilStatus', '$gender')";

    if (!mysqli_query($con, $sql))
        echo 'Not Inserted';

    else
        echo 'Inserted successfully';
?>