<?php 
   include('connect.php');
   $lname = $_POST['lname'];
   $fname = $_POST['fname'];
   $email = $_POST['email'];
   $passwd = $_POST['passwd'];
    if ($lname && $fname && $email && $passwd)
    {
    $sql = "INSERT INTO userInfo (firstname, lastname, pass, email, permission)
    VALUES ('$fname', '$lname', '$passwd', '$email', 0)";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    mysqli_close($conn);

?>