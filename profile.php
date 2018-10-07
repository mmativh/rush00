<?php include "includes/header.php"; ?>
<?php if(!$_SESSION['id'])
        {
            header("Location: signup.php");
        }
?>
    <div class= "c_nav">
        <form action="includes/user_update.php" method="POST" class="form_s">
        <label>Welcome back<br/>you can change your account details here</label><br/>
        <div class="clear"></div>
        <input type="hidden" name="id" value="<?php $_SESSION['id'] ?>"/>
            <label>Firstname</label>
            <input type="text" name="fname" value=""/>
            <label>Lastname</label>
            <input type="text" name="lname" value=""/>
            <div class="clear"></div>
            <input type="submit" name="submit" value="OK"/>
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