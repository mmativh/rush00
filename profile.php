<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <form action="#" method="Post" class="form_s">
        <label>Welcome back (user-name)  you can change your account details here</label><br/>
        <div class="clear"></div>
            <label>Username</label>
            <input type="text" name="login"/>
            <label>Password</label>
            <input type="password" name="passwd"/>
            <div class="clear"></div>
            <input type="submit" name="sumbit" value="OK"/>
            <a href="delete.php?user_id=1">Delete my account</a>
        </form>
    </div>
<?php include "includes/footer.php"; ?>