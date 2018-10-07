<?php
    include("connect.php");

    $sql = "SELECT `category` FROM `productInfo`";
    $categories = array();
    $result = mysqli_query($conn, $sql);
    $temp = $result;
    while ($array = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        $categories[] = $array['category'];
    }
    $categories = array_unique($categories);

    echo "<br/><br/>";
    foreach ($categories as $category)
    {
        $sql = "SELECT * FROM `productinfo` WHERE `category` = 
        '$category'";
        $result = mysqli_query($conn, $sql);
        echo "<h2 id=\"$category\" class=\"titleh\">$category</h2>";
        echo '<div class= "c_navc" class="titleh">';
        while ($array = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            if ($category == $array['category'])
            {
                $p_units = $array['stock'];
                $p_price = $array['price'];
                $p_id = $array['id'];
                $p_name = $array['productName'];
                $p_image = "shoe1.jpeg";

                echo ' <div class="item">
                <div class="pro_p"><div class="units_n">'.$p_units.' left</div>'.$p_name.'<b> R '.$p_price.'</b> <a href="basket.php?productno='.$p_id.'">Add</a> </div>
                <img src="img/'.$p_image.'" width="100%"/>
                </div>';
            }
        }
        echo '</div>';
    }
?>
