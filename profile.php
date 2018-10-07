<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <form action="includes/user_update.php" method="POST" class="form_s">
        <label>Welcome back (user-name)  <br/>you can change your account details here</label><br/>
        <div class="clear"></div>
            <label>Firstname</label>
            <input type="text" name="fname"/>
            <label>Lastname</label>
            <input type="text" name="lname"/>
            <label>Password</label>
            <input type="password" name="passwd"/>
            <div class="clear"></div>
            <input type="submit" name="sumbit" value="OK"/>
            <?php
            if ($_SESSION['permission'] == 1)
            {
              echo   '<a href="admin_user.php?user_id=1">User admin</a>
                       <a href="admin.php?user_id=1">User admin</a>';
            }
            ?>
            <?php 
            if ($_SESSION['id'])
            {
                echo '<a href="includes/user_delete.php?user_id='.$_SESSION['id'].'">Delete my account</a>';
            }
            
            ?>
        </form>
    </div>
<?php include "includes/footer.php"; ?>