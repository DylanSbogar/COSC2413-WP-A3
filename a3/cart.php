<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <title>Christmas On Main</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
  <script src='../wireframe.js'></script>
</head>

<body>

  <?php
  include 'include/header.php';
  ?>

  <?php
  include 'include/nav.php';
  ?>

  <main>
    <?php
    if (isset($_POST['submit'])){
      $_SESSION['$cart'][(int)$_SESSION['$cartquantity']][0] = $_POST["name"];
      $_SESSION['$cart'][(int)$_SESSION['$cartquantity']][1] = $_POST["qty"];
      $_SESSION['$cart'][(int)$_SESSION['$cartquantity']][2] = $_POST["option"];
      $_SESSION['$cart'][(int)$_SESSION['$cartquantity']][3] = $_POST["price"];
      $_SESSION['$cart'][(int)$_SESSION['$cartquantity']][4] = $_POST["id"];
      $_SESSION['$cartquantity']++;

    }
    $total = 0;
    for ($v = 0; $v < $_SESSION['$cartquantity'];$v++)
    {
      $total = $total + ($_SESSION['$cart'][$v][3] * $_SESSION['$cart'][$v][1]);
    }
    ?>

    <?php include 'include/cart.php' ?>

      <span><h2>Total: $<?php echo $total?></h2></span> <br>

    <div class="center">
      <form class="cartform" action="products.php" method="post">
        <input class="button1" id="cancel" type="submit" name="cancel" value="Cancel Order" id="cancelbutton"></input>
      </form>

      <form class="cartform" action="checkout.php" method="post">
        <input class="button1" type="submit" name="checkout" <?php if ($_SESSION['$cartquantity'] == '0'){ ?> disabled <?php   } ?> value="Proceed to Checkout" id="checkoutbutton"></input>
      </form>
    </div>
  </main>

  <?php
  include 'include/footer.php';
  ?>

</body>
</html>
