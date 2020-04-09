<?php
    session_start();

    if (isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect('localhost','root','','cedula');
        $query = "SELECT username, userPass FROM users WHERE BINARY username=? AND userPass=? LIMIT 1";

        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if($stmt->fetch())
        {
            $_SESSION['login_user'] = $username;
            if ($username=="user")
                header("location: home.php");
            else if ($username=="admin")
                header("location: admin_class_a.php");
        }
        else
            echo '<script type="text/javascript">
                    alert("The username or password you entered is invalid.");
                    </script>';

        mysqli_close($conn);
    }
?>