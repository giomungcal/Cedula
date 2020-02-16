<?php
    session_start();
    $error = '';

    if (isset($_POST['submit']))
    {
        if (empty($_POST['username']) || empty($_POST['password']))
            $error = "Invalid username or password.";
        else
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = mysqli_connect('localhost','root','','cedula'); // third parameter is password
            $query = 'SELECT username, userPass FROM users WHERE username=? AND userPass=? LIMIT 1';

            $stmt = $conn->prepare($query);
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $stmt->bind_result($username, $password);
            $stmt->store_result();

            if($stmt->fetch())
            {
                $_SESSION['login_user'] = $username;
                header("location: home.php");
            }
            else
                $error = 'Invalid username or password.';
            
            mysqli_close($conn);
        }
    }
?>