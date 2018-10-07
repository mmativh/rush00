<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">ADMIN PRODUCT</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">
           
               <form action="update_product.php" method="post" enctype="multipart/form-data">
                <div class="item-sec">
                    <img src="img/shoe1.jpeg" height="50px"/>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="item-sec">
                    <input type="text" name="product_name" value="Shoes"/>
                </div>
                <div class="item-sec">
                    <input type="text" name="price" value="R 350.00"/>
                </div>
                <div class="item-sec">
                    <input type="submit" name="update" class="green" value="Update"/>
                    <a href="delete_item.php?productid=210" class="red">Remove</a>
                </div>
                </form>

                <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="item-sec">
                    <img src="img/shoe1.jpeg" height="50px"/>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="item-sec">
                    <input type="text"  name="product_name" value="Shoes"/>
                </div>
                <div class="item-sec">
                    <input type="text" name="price" value="R 350.00"/>
                </div>
                <div class="item-sec">
                    <input type="submit" name="update"class="green" value="ADD"/>
                </div>
                </form>
         
           
       </li>
    </div>
<?php include "includes/footer.php"; ?>