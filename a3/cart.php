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
      $_SESSION['$cartquantity']++;

    }

    //manual reset
    // $_SESSION['$cartquantity'] = 0;
    // $_SESSION['$cart'] = array();

    // echo "this is working";
    // echo "this is the cart quantity";
    // echo $cartquantity;
    // echo "this is the name of first item";
    // echo $_SESSION['$cart'][0][0];
    // }

    ?>

    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Cart
      </div>

      <!-- Product #1 -->
      <?php
      for ($x = 0; $x < $_SESSION['$cartquantity']; $x++)
      {
        echo '<div class="item">';
        echo  '<div class="buttons">';
        echo    '<span class="delete-btn">Remove</span>';
        echo  '</div>';

        echo  '<div class="image">';
        echo    '<img src="item-1.png" alt="" />';
        echo  '</div>';

        echo  '<div class="description">';
        echo    '<span>'.$_SESSION['$cart'][$x][0];
        echo  '</span>';
        echo    '<span>'.$_SESSION['$cart'][$x][2];
        echo '</span>';
        echo  '</div>';

        echo  '<div class="quantity">';
        echo    '<script src="tools.js"></script>';
        echo    '<button class="minus-btn" type="button" name="decrease" onclick="decrementValue()">';
        echo      '-';
        echo   ' </button>';
        echo    '<input id="quantitynumber" type="number" name="qty" value="'.$_SESSION['$cart'][$x][1].'" readonly>';
        echo    '<button class="plus-btn" type="button" name="increase" onclick="incrementValue()">';
        echo      '+';
        echo    '</button>';
        echo  '</div>';
        echo  '<div class="total-price">$'.$_SESSION['$cart'][$x][3].'</div>';
        echo      '</div>';

        //TODO in here
        //fix quantity, save it to the array
        //fix the quantity increment buttons
        //neaten up design
      }

      if ($x == 0)
      {
        echo '<div class="center" >cart is empty</div>';
      }
      ?>
      <form action="productsTest.php" method="post">
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
