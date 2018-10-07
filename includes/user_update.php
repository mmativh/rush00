<?php 
   include('connect.php');
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $user_id = $_POST['id'];

   if ($_POST['sumbit'])
   {
        $sql = "UPDATE userInfo SET lastname ='$lname' email ='$email' firstname ='$fname' password = '$passwd' WHERE id='$user_id'";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
            header("Location: ../index.php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

?>