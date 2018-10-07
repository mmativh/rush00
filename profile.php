<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <form action="#" method="POST" class="form_s">
        <label>Welcome back (user-name)  <br/>you can change your account details here</label><br/>
        <div class="clear"></div>
            <label>Username</label>
            <input type="text" name="login"/>
            <label>Password</label>
            <input type="password" name="passwd"/>
            <div class="clear"></div>
            <input type="submit" name="sumbit" value="OK"/>
            <a href="admin_user.php?user_id=1">User admin</a>
            <a href="admin.php?user_id=1">User admin</a>
            <a href="delete.php?user_id=1">Delete my account</a>
        </form>
    </div>
<?php include "includes/footer.php"; ?>