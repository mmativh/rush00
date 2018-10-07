<?php

    echo '<form action="update_user.php" method="POST" enctype="multipart/form-data">
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
        <a href="user_remove.php?user_id='.$u_id.'" class="red">Remove</a>
    </div>
    </form>';

?>