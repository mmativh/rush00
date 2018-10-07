<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">ADMIN USER</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">        
        <?php include "includes/admin_user_list.php"; ?>
            <form action="add_user.php" method="POST" enctype="multipart/form-data">
                <div class="item-sec">
                <label class="a_label">User first name:</label>
                <input type="text" name="u_fname" value=""/>
                </div>
                <div class="item-sec">
                    <label class="a_label">User Last name:</label>
                    <input type="text" name="product_name" value=""/>
                </div>
                <div class="item-sec">
                    <label class="a_label">Email:</label>
                    <input type="text" name="price" value=""/>
                </div>
                <div class="item-sec">
                    <input type="submit" name="update"class="green" value="ADD"/>
                </div>
            </form>
       </li>
    </div>
<?php include "includes/footer.php"; ?>