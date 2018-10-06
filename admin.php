<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">ADMIN PRODUCT</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">
           <ul>
               <form action="update_product.php" method="get">
                <div class="item-sec"><img src="img/shoe1.jpeg" height="50px"/></div>
               <input class="item-sec" value="Shoes"/>
               <input type="text" class="item-sec" value="R 350.00"/>
               <div class="item-sec"><input type="submit" name="remove" value="remove"class="red"/><input type="submit" name="update"class="green" value="add"/></div>
                </form>
           </ul>
           <ul>
               <div class="item-sec"><b>ADD PRODUCT </b></div>
               <div class="item-sec"></div>
               <div class="item-sec"> <a href="add_product.php" class="green"> ADD</a> To ADD product</div>
           </ul>
       </li>
    </div>
<?php include "includes/footer.php"; ?>