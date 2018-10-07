<?php 
   include('connect.php');
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $user_id = $_POST['id'];
   $passwd = $_POST['passwd'];

   if ($_POST['sumbit'])
   {
        $sql = "UPDATE userInfo SET lastname ='$lname' email ='$email' firstname ='$fname' password = '$passwd' WHERE id='$user_id'";

        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

?>