<?php

for ($num = 0; $num < 6; $num++)
{
    $p_units = 5;
    $p_price = 500.00;
    $p_id = 1230;
    $p_name = "Puma";
    $p_image = "shoe1.jpeg";

    echo ' <div class="item">
    <div class="pro_p"><div class="units_n">'.$p_units.' left</div>'.$p_name.'<b> R '.$p_price.'</b> <a href="basket.php?productno='.$p_id.'">Add</a> </div>
    <img src="img/'.$p_image.'" width="100%"/>
    </div>';
}

?>