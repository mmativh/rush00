<?php
    echo '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
</head>
    <body>
    <header>
        <nav>
            <div class= "c_nav">
            <a class="t_links" href="index.php"><img src="img/logo.png" height="60px" /></a>
                <a class="t_links" href="index.php">HOME</a>
                <a class="t_links" href="cat_page.php">PRODUCTS</a>
                <a class="t_links" href="signin.php">SIGN IN / UP</a>
                <a class="t_links" href="basket">BASKET</a>
                <span class="t_links">
                    <input type="text" placeholder="Search" name="search"/>
                </span>
            </div>
        </nav>
    </header>';
?>