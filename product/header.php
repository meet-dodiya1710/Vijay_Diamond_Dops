<header class="header">

   <div class="flex">
      <script src="https://kit.fontawesome.com/abb4021c7e.js" crossorigin="anonymous"></script>

      <a href="#" class="logo"><img src="../images/logo2.png" alt=""></a>

      <nav class="navbar">
         <a href="products.php">Products</a>
      </nav>

      <?php

      $select_rows = mysqli_query($con, "SELECT * FROM `cart`") or die ('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping"></i><span>
            <?php echo $row_count; ?>
         </span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>