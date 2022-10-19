<!DOCTYPE html>
<html>
  <head>
    <title>Zukka</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./src/styles/index.css" />
    <script
      src="https://kit.fontawesome.com/4c04a4feb8.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- HEADER SECTION -->
    <header>
      <img src="./src/images/header.webp" alt="Background Image" />
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
              <li id="dropdown-li">  <a href="./login.php">Log in</a> </li>
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
      <!---->
      <!-- HEADER TEXT -->
      <div class="textos">
        <h1 class="">This is ZUKKA</h1>
        <h3 class="">control your life</h3>
        <div class="btn"><a href="./shop.php">Shop</a></div>
      </div>
      <!---->
      <!-- GO TO TOP -->
      <div class="go_to_top" id="go_to_top">
        <i class="fa-solid fa-arrow-up"></i>
      </div>
    </header>
    <!--------------------------->
    <script src="src/js/header.js"></script>
  </body>
</html>

