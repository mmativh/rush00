<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">Your Basket</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">
           <ul>
                <div class="item-sec"><img src="img/shoe1.jpeg" height="50px"/></div>
               <div class="item-sec">Shoes 204</div>
               <div class="item-sec">R 350.00</div>
               <div class="item-sec"><a href="remove.php?productno=123"> Remove</a><a href="update.php?productno=123" class="green">Update</a></div>
           </ul>
           <ul>
               <div class="item-sec"><b>ADD PRODUCT </b></div>
               <div class="item-sec"></div>
               <div class="item-sec"> <a href="add_product.php" class="green"> ADD</a> To ADD product</div>
           </ul>
       </li>
    </div>
<?php include "includes/footer.php"; ?>