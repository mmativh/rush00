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
                    <input type="text"  value="Shoes"/>
                </div>
                <div class="item-sec">
                    <input type="text" value="R 350.00"/>
                </div>
                <div class="item-sec">
                    <input type="submit" name="update"class="green" value="add"/>
                    <a href="delete_item.php?productid=210" class="red">Remove</a>
                </div>
                </form>
         
           <ul>
               <div class="item-sec"><b>ADD PRODUCT </b></div>
               <div class="item-sec"></div>
               <div class="item-sec"> <a href="add_product.php" class="green"> ADD</a> To ADD product</div>
           </ul>
       </li>
    </div>
<?php include "includes/footer.php"; ?>