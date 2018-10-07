<?php
    session_start();
?>

<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">Your Basket</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">
        <ul>
        <?php
            include "addItem.php";
        ?>
        <?php
            include "includes/connect.php";
            $sql = "SELECT * FROM `productinfo`";
            $result = mysqli_query($conn, $sql);
            while ($array = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                foreach ($_SESSION['basket'] as $index => $item)
                {
                    if ($item == $array['id'])
                    {
                        $price = $array['price'];
                        $name = $array['productName'];
                        echo "<div class=\"item-sec\"><img src=\"img/shoe1.jpeg\" height=\"50px\"/></div>
                        <div class=\"item-sec\">
                            <label class=\"a_label\">Product name:</label>
                              $name
                         </div>
                        <div class=\"item-sec\">
                             <label class=\"a_label\">Product price:</label>
                             R $price
                        </div>
                        <div class=\"item-sec\">
                             <label class=\"a_label\">Number:</label>
                            <input class=\"unit_num\" type=\"text\" name=\"num_items\" value=\"1\"/>
                         </div>
                        <div class=\"item-sec\"><a href=\"remove.php?productno=$index\" class=\"red\"> Remove</a></div>";
                    }
                }
            }
        ?>
        </ul>
        <ul>   
            <div class="item-sec"><b>TOTAL  AMOUNT </b></div>
            <div class="item-sec"><?php include "calculateOrder.php" ?></div>
            <div class="item-sec"> <a href=<?php include "isValid.php"; ?> class="green"> Confirm</a></div>
            <div class=item-sec><a href="removeAll.php" class=red>Remove All</a></div>
        </ul>
       </li>
    </div>
<?php include "includes/footer.php"; ?>

<!--                         $price = $array['price'];
                        echo "<div class=\"item-sec\"><img src=\"img/shoe1.jpeg\" height=\"50px\"/></div>
                        <div class=\"item-sec\">
                            <label class=\"a_label\">Product name:</label>
                              Shoes 204
                         </div>
                        <div class=\"item-sec\">
                             <label class=\"a_label\">Product price:</label>
                             R 350.00
                        </div>
                        <div class=\"item-sec\">
                             <label class=\"a_label\">Number:</label>
                            <input class=\"unit_num\" type=\"text\" name=\"num_items\" value=\"1\"/>
                         </div>
                        <div class=\"item-sec\"><a href=\"remove.php?productno=123\" class=\"red\"> Remove</a></div>"; -->