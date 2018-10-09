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

// if ( isset( $_POST['order'] ) ) {
// $cartquantity = 0;
$cart[(int)$cartquantity][0] = $_POST["name"];
$cart[(int)$cartquantity][1] = $_POST["qty"];
$cart[(int)$cartquantity][2] = $_POST["option"];
$cartquantity += 1;

// echo "this is working";
// echo "this is the cart quantity";
// echo $cartquantity;
// echo "this is the name of first item";
// echo $cart[0][0];
// }

  ?>

    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Cart
      </div>

      <!-- Product #1 -->
      <?php
      for ($x = 0; $x < $cartquantity; $x++)
      {

        echo '<div class="item">';
        echo  '<div class="buttons">';
        echo    '<span class="delete-btn"></span>';
        echo    '<span class="like-btn"></span>';
        echo  '</div>';

        echo  '<div class="image">';
        echo    '<img src="item-1.png" alt="" />';
        echo  '</div>';

        echo  '<div class="description">';
        echo    '<span>'.$cart[$x][0];
        echo  '</span>';
        echo    '<span>'.$cart[$x][2];
        echo '</span>';
        echo  '</div>';

        echo  '<div class="quantity">';
        echo    '<script src="quantity.js"></script>';
        echo    '<button class="minus-btn" type="button" name="decrease" onclick="decrementValue()">';
        echo      '<img src="plus.svg" alt="" />';
        echo   ' </button>';
        echo    '<input id="quantitynumber" type="text" name="qty" value="'.$cart[$x][1].'">';
        echo    '<button class="plus-btn" type="button" name="increase" onclick="incrementValue()">';
        echo      '<img src="minus.svg" alt="" />';
        echo    '</button>';
        echo  '</div>';
      }
      ?>



        <div class="total-price">$349</div>
      </div>
    </div>
  </main>

  <?php
  include 'include/footer.php';
  ?>

  </body>
  </html>
