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
    ?>

<?php include 'include/cart.php' ?>

      <form action="products.php" method="post">
        <input  type="submit" name="cancel" value="cancel" id="cancelbutton"></input>
      </form>

      <form action="checkout.php" method="post">
        <input  type="submit" name="checkout" value="Proceed to Checkout" id="checkoutbutton"></input>
      </form>
    </div>
  </main>

  <?php
  include 'include/footer.php';
  ?>

</body>
</html>
