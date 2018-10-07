<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">ADMIN PRODUCT</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">        
        <?php include "includes/admin_list.php"; ?>
                <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="item-sec">
                    <img src="img/shoe1.jpeg" height="50px"/>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="item-sec">
                    <label class="a_label">Name of product:</label>
                    <input type="text"  name="product_name" value="Shoes"/>
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
                    <input type="text" name="price" value="R 350.00"/>
                    <label class="a_label">Units available:</label>
                    <input class="unit_num" type="text" name="num_items" value="1"/>
                </div>
                <div class="item-sec">
                    <input type="submit" name="update"class="green" value="ADD"/>
                </div>
                </form>
       </li>
    </div>
<?php include "includes/footer.php"; ?>