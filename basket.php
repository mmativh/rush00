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
               <div class="item-sec"><a href="remove.php?productno=123" class="red"> Remove</a></div>
           </ul>
           <ul>
               <div class="item-sec"><b>TOTAL  AMOUNT </b></div>
               <div class="item-sec">R 3500.00</div>
               <div class="item-sec"> <a href="remove.php?productno=123" class="green"> Confirm</a> To Place order</div>
           </ul>
       </li>
    </div>
<?php include "includes/footer.php"; ?>