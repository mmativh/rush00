<?php 

   include('connect.php');
   $productid = $_GET['user_id'];
    if ($productid)
    {
        $sql = "DELETE FROM userInfo WHERE id=$productid";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

?>