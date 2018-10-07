<?php 
   include('connect.php');
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $user_id = $_POST['id'];
   $passwd = $_POST['passwd'];

   $sql = "UPDATE userInfo SET lastname ='$lname' WHERE id='$user_id'";

   if (mysqli_query($conn, $sql)) {
       echo "Record updated successfully";
   } else {
       echo "Error updating record: " . mysqli_error($conn);
   }
}
    mysqli_close($conn);

?>