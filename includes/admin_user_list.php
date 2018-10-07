<?php

for ($num = 0; $num < 6; $num++)
{
    $p_units = 5;
    $p_price = 500.00;
    $p_id = 1230;
    $u_fname = "Puma";
    $u_lname = "Puma";
    $u_email = "user@gmail.com";

    echo '<form action="update_product.php" method="POST" enctype="multipart/form-data">
    <div class="item-sec">
    <label class="a_label">User first name:</label>
    <input type="text" name="u_fname" value="'.$u_fname.'"/>
    </div>
    <div class="item-sec">
        <label class="a_label">User Last name:</label>
        <input type="text" name="product_name" value="'.$u_lname.'"/>
    </div>
    <div class="item-sec">
        <label class="a_label">Email:</label>
        <input type="text" name="price" value="'.$u_email.'"/>
    </div>
    <div class="item-sec">
        <input type="submit" name="update" class="green" value="Update"/>
        <a href="delete_item.php?productid='.$p_id.'" class="red">Remove</a>
    </div>
    </form>';
}

?>