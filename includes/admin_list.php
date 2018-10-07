<?php
include('connect.php');

$sql = "SELECT id, category, productName, price, stock FROM productinfo";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $p_units = $row["stock"];
    $p_price = $row["price"];
    $p_id = $row["id"];
    $p_name = $row["productName"];
    $cat = $row["category"];

        echo '<form action="includes/product_update.php" method="POST" enctype="multipart/form-data">
    <div class="item-sec">
        <img src="img/shoe1.jpeg" height="50px"/>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <div class="item-sec">
        <label class="a_label">Name of product:</label>
        <input type="text" name="product_name" value="'.$p_name.'"/>
        <label class="a_label">Category:</label>
        <select name="cat" value="'.$cat.'">
        <option value="puma">Puma</option>
        <option value="nike">Nike</option>
        <option value="addidas">Adidas</option>
        <option value="newbalance">New Balance</option>
        <option value="reebok">Reebok</option>
        </select>
    </div>
    <div class="item-sec">
        <label class="a_label">Price of product:</label>
        <input type="text" name="price" value="'.$p_price.'"/>
        <label class="a_label">Units available:</label>
        <input class="unit_num" type="text" name="num_items" value="'.$p_units.'"/>
    </div>
    <div class="item-sec">
        <input type="submit" name="update" class="green" value="Update"/>
        <a href="includes/product_delete.php?product_id='.$p_id.'" class="red">Remove</a>
    </div>
    </form>';
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
for ($num = 0; $num < 6; $num++)
{
    $p_units = 5;
    $p_price = 500;
    $p_id = 1230;
    $p_name = "Puma";
    $p_image = "shoe1.jpeg";

    echo '<form action="includes/product_update.php" method="POST" enctype="multipart/form-data">
    <div class="item-sec">
        <img src="img/'.$p_image.'" height="50px"/>
        <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    <div class="item-sec">
        <label class="a_label">Name of product:</label>
        <input type="text" name="product_name" value="'.$p_name.'"/>
        <label class="a_label">Category:</label>
        <select name="cat">
        <option value="puma">Puma</option>
        <option value="nike">Nike</option>
        <option value="addidas">Adidas</option>
        <option value="newbalance">New Balance</option>
        <option value="reebok">Reebok</option>
        </select>
    </div>
    <div class="item-sec">
        <label class="a_label">Price of product:</label>
        <input type="text" name="price" value="'.$p_price.'"/>
        <label class="a_label">Units available:</label>
        <input class="unit_num" type="text" name="num_items" value="'.$p_units.'"/>
    </div>
    <div class="item-sec">
        <input type="submit" name="update" class="green" value="Update"/>
        <a href="includes/product_delete.php?product_id='.$p_id.'" class="red">Remove</a>
    </div>
    </form>';
}

?>