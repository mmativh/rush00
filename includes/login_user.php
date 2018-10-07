<?php
session_start();
    include('connect.php');
    $user = trim($_POST["email"]);
    $pass = trim($_POST["passwd"]);
    if ($user && $pass) 
    {
        $sql = "SELECT id, email, pass, firstname, permission FROM userInfo";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                
                if ($row["email"] == $user)
                {
                    if ($row["pass"] == $pass)
                    {
                        $_SESSION['permission'] = $row["permission"];
                        $_SESSION['id'] = $row["id"];
                        $_SESSION['firstname'] = $row["firstname"];
                        header("Location: ../index.php");
                        return 0;
                    }
                }
            }
            $_SESSION['id'] = 0;
        } else {
            header("Location: login.php");
        } 
    }

   
?>