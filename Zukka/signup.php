<?php
    require_once('./database/signup.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/signup.css">
    <script src="https://kit.fontawesome.com/4c04a4feb8.js" crossorigin="anonymous"></script>
    <script src="./modules/jquery/jquery-3.6.1.js"></script>
</head>

<body>
    <header>
        <!-- NAVBAR -->
        <nav id="nav">
            <div class="menuToggler" id="menuIcon">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <a href="index.php" class="logo"> Zukka </a>
            <div class="icons">
                <div class="profile">
                    <i class="fa-solid fa-user icon" id="profile"></i>
                    <ul class="dropdown" id="dropdown">
                        <li id="dropdown-li"> <a href="./login.php">Log in</a> </li>
                        <li id="dropdown-li"> <a href="./signup.php">Sign Up</a> </li>
                    </ul>
                </div>
                <i class="fa-solid fa-cart-shopping icon"></i>
            </div>
        </nav>
        <!---->
        <!-- MENU -->
        <ul class="menu" id="menu">
            <li id="menu_li"><a href="./index.php"> Home </a></li>
            <li id="menu_li"><a href="./shop.php"> Shop </a></li>
            <li id="menu_li"><a href=""> About </a></li>
            <li id="menu_li"><a href=""> Contact </a></li>
        </ul>
        <!-- GO TO TOP -->
        <div class="go_to_top" id="go_to_top">
            <i class="fa-solid fa-arrow-up"></i>
        </div>


        <section class="signup">
            <div class="image">
                <img src="./src/images/login.svg" alt="FlatIcon Image">
            </div>
            <form action="./database/signup.php" method="POST">
                <div class="textos">
                    <h1> Sign Up </h1>
                    <h4> join to our family! </h4>
                </div>
                <div class="input username">
                    <input name="username" type="name" placeholder="Username">
                </div>
                <div class="input email">
                    <input name="email" type="email" placeholder="Email address">
                </div>
                <div class="input password">
                    <input name="password" type="password" placeholder="Password">
                </div>
                <div class="input poblation">
                    <input name="poblation" type="text" placeholder="Poblation">
                </div>
                <div class="input zip-code">
                    <input name="zip-code" type="number" placeholder="Zip Code">
                </div>
                <input class="signup" name="submit" type="submit" value="Sign Up">
                <div class="have-account">
                    <p>
                        Do you have an account? 
                        <a href="./login.php"> Log In </a>
                    </p>
                </div>
            </form>
        </section>

    </header>

    <script src="src/js/header.js"></script>
</body>

</html>