<?php

    include('connect.php');
    $user = $_POST["email"];
    $pass = $_POST["passwd"];
    if ($user && $pass) 
    {
        $sql = "SELECT id, email, pass FROM userInfo";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                if ($row["email"] === $user && $row["pass"] === $pass)
                {
                    $_SESSION['id'] = $row["id"];
                    return 0;
                }
            }
        } else {
            echo "0 results";
        } 
    }

   
?>