<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <form action="includes/login_user.php" method="POST" class="form_s">
            <label>Email</label>
            <input type="text" name="email"/>
            <label>Password</label>
            <input type="text" name="passwd"/>
            <div class="clear"></div>
            <input type="submit" name="sumbit" value="OK"/>
            <a href="signup.php">No account? Register Here</a>
        </form>
    </div>
<?php include "includes/footer.php"; ?>