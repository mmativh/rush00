<?php 

   include('connect.php');
   $productid = $_GET['product_id'];
    if ($productid)
    {
        $sql = "DELETE FROM productInfo WHERE id=$productid";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);

?>