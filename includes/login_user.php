<?php

    include('connect.php');

    $user = $_POST["login"];
    $pass = hash('ripemd160',$_POST["passwd"]);
    if ($user && $pass) 
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $email = mysqli_real_escape_string($conn,$user);
            $pass = mysqli_real_escape_string($conn,$pass); 
            
            $sql = "SELECT id FROM userinfo WHERE email = '$email' and pass = '$pass'";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
               $_SESSION['login_user'] = $row['id'];;
             //  header("location: index.php");
            }else {
               $error = "Your Login Name or Password is invalid";
            }
         }
      
        
    }

   
?>