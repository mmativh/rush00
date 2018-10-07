<?php 

   include('connect.php');
   $productName = $_POST['product_name'];
   $category = $_POST['cat'];
   $price = $_POST['price'];
   $stock = $_POST['num_items'];
    if ($productName && $category && $price && $stock)
    {
    $sql = "INSERT INTO productInfo (category, productName, price, stock)
    VALUES ('$productName', '$category', '$price', '$stock')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
    mysqli_close($conn);

?>