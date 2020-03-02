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

                    echo $firstName . " " . $middle . " " . $lastName;
                    echo "<br/>";
                    echo $homeAddress;
                    echo "<br/>";
                    echo $dateOfBirth;
                    echo "<br/>";
                    echo $placeOfBirth;
                    echo "<br/>";
                    echo $civilStatus;
                    echo "<br/>";
                    echo $gender;
                ?>
                </p>
                <p id="hidden"></p>
            </div>
        </div>
    </div>
    <br/><br/><br/>
    <p align="center">
    <form action="classainsert.php" method="post"
    <input type="submit" value="Submit">
    <!--
    <button style="cursor: pointer" onclick="classainsert.php" align="center">Confirm and Print</button>
    -->
    <button onclick="storedata()">Edit</button>
    </p>
    <script src="script.js"></script>
</body>
</html>