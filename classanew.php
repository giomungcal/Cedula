<?php
    $firstName = $_POST['fname'];
    $middle = $_POST['minitial'];
    $lastName = $_POST['lname'];
    $homeAddress = $_POST['address'];
    $dateOfBirth = $_POST['birthday'];
    $placeOfBirth = $_POST['birthplace'];
    $civilStatus = $_POST['civilstatus'];
    $gender = $_POST['gender'];

    if(!empty($firstName) || !empty($middle) || !empty($lastName) || !empty($homeAddress) || !empty($dateOfBirth) || !empty($placeOfBirth) || !empty($civilStatus) || !empty($gender))
    {

    }


    $civilStatus = $_POST['civilstatus'];
    $gender = $_POST['gender'];
    ))

    $con = new mysqli('localhost','root','','classa');

    if(mysql_connect_error())
    {
        die('Connect Error ('.mysqli_connect_errno().')'. mysqli_connect_error());

    }

    if (!mysqli_select_db($con,'classa'))
    {
        echo 'Database Not Selected';
    }


    $sql = "INSERT INTO applicants (firstName, middle, lastName, homeAddress, dateOfBirth, placeOfBirth, civilStatus, gender) VALUES ('$firstName', '$middle', '$lastName', '$homeAddress', '$dateOfBirth', '$placeOfBirth', '$civilStatus', '$gender')";

    if (!mysqli_query($con, $sql))
        echo 'Not Inserted';

    else
        echo 'Inserted successfully';
?>