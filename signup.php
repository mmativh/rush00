<?php include "includes/header.php"; ?>
    <div class= "c_nav">
        <form action="includes/user_create.php" method="POST" class="form_s">
            <label>First Name</label>
            <input type="text" name="fname"/>
            <label>Last Name</label>
            <input type="text" name="lname"/>
            <label>Email address</label>
            <input type="password" name="email"/>
            <label>Password</label>
            <input type="password" name="passwd"/>
            <div class="clear"></div>
            <input type="submit" name="sumbit" value= "Createaccount"/>
            <a href="signin.php">Have an account? Login</a>
        </form>
    </div>
<?php include "includes/footer.php"; ?>