<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <h2 id="adidas">Your Basket</h2>
    </div>
    <div class= "c_nav">
    <li class="basket">
           <ul>
                <div class="item-sec"><img src="img/shoe1.jpeg" height="50px"/></div>
               <div class="item-sec">
                   <label class="a_label">Product name:</label>
                     Shoes 204
                </div>
               <div class="item-sec">
                    <label class="a_label">Product price:</label>
                    R 350.00
               </div>
               <div class="item-sec">
                    <label class="a_label">Number:</label>
                   <input class="unit_num" type="text" name="num_items" value="1"/>
                </div>
               <div class="item-sec"><a href="remove.php?productno=123" class="red"> Remove</a></div>
           </ul>
           <ul>
               <div class="item-sec"><b>TOTAL  AMOUNT </b></div>
               <div class="item-sec">R 3500.00</div>
               <div class="item-sec"> <a href="remove.php?productno=123" class="green"> Confirm</a></div>
           </ul>
       </li>
    </div>
<?php include "includes/footer.php"; ?>