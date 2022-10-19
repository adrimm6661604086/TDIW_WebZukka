<?php
require_once('./database/connect.php');
$conn = $con;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Zukka</title>
  <link rel="stylesheet" href="./src/styles/shop.css" />
  <script src="https://kit.fontawesome.com/4c04a4feb8.js" crossorigin="anonymous"></script>
  <script src="./modules/jquery/jquery-3.6.1.js"></script>
</head>

<body>
  <header>
    <img src="./src/images/shop.webp" alt="" />
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
    <!-- HEADER TEXT -->
    <div class="textos">
      <h1 class=""> take advantage of the latest offers </h1>
    </div>
    <!---->
    <!-- MENU -->
    <ul class="menu" id="menu">
      <li id="menu_li"><a href="./index.php"> Home </a></li>
      <li id="menu_li"><a href="./shop.php"> Shop </a></li>
      <li id="menu_li"><a href=""> About </a></li>
      <li id="menu_li"><a href=""> Contact </a></li>
    </ul>
    <!---->
    <!-- GO TO TOP -->
    <div class="go_to_top" id="go_to_top">
      <i class="fa-solid fa-arrow-up"></i>
    </div>
  </header>
  <!-- SECTION DE CATEGORIAS Y FILTRAJE -->
  <section class="category_section">
    <!-- Category Boxes -->
    <div class="categories_box">
      <div class="category active" data-name="all">
        All
      </div>
      <div class="category" data-name="suplements">
        Suplements
      </div>
      <div class="category" data-name="kits">
        Kits
      </div>
      <div class="category" data-name="equipment">
        Equipment
      </div>
    </div>
    <!-- -->
  </section>

  <section class="product_section">
    <div class="grid">
      <?php

      $sql = "SELECT * FROM products order by RAND()";
      $query = mysqli_query($conn, $sql);

      while ($mostrar = mysqli_fetch_array($query)) {
      ?>
        <div class="product" data-name="<?php echo $mostrar['category'] ?>">
          <div class="product-image">
            <img src="./src/images/<?php echo $mostrar['img'] ?>" alt="Product Image <?php echo $mostrar['name'] ?>" />
          </div>
          <div class="product-content">
            <div>
              <h1> <?php echo $mostrar['name'] ?> </h1>
              <h3> <?php echo $mostrar['category'] ?> </h3>
            </div>
            <div class="price">
              <?php echo $mostrar['price'] ?> €
              <div class="quantity">
                <?php if ($mostrar['quantity'] > 0) : ?>
                  <div class="stock"> In Stock</div>
                <?php elseif ($mostrar['quantity'] == 0) : ?>
                  <div class="sold-out">Sold Out</div>
                <?php endif ?>
              </div>
            </div>
            <?php 
              if ($mostrar['quantity'] == 0) {
                $class = "disabled";
              }
              else
              {
                $class = "addCart";
              }
            ?>
            <div class="<?php echo $class ?>">
              Add to Cart
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <script src="./src/js/products.js"></script>
  <script src="./src/js/header.js"></script>
</body>

</html>