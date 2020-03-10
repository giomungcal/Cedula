<?php
    session_start();
    $error = '';

    if (isset($_POST['submit']))
    {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $conn = mysqli_connect('localhost','root','','cedula'); // third parameter is password
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
            {
            // Alert box or error message below submit button if user typed wrong credentials? Mr Mungcal u decide hahahahha
            //Alert box

            echo '<script type="text/javascript">
            alert("The username or password you entered is invalid.");
            </script>';


            // error message below submit button
            // $error = 'The username or password you entered is invalid.';
        }

            mysqli_close($conn);
}
?>