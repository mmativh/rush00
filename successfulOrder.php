<?php
    session_start();
?>

<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">Your Order was Successful!</h2>
    </div>
<?php
    $file = fopen("savedOrders.txt", "a+");
    fwrite($file, $_SESSION['id'] . " : ");
    foreach ($_SESSION['basket'] as $item)
    {
        fwrite($file, $item);
    }
    fwrite($file, "\n");
?>
<?php include "includes/footer.php"; ?>
