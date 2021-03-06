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

   <?php

$id = $_GET['id'];

foreach($records as $v) {
    if ($v[0] == $id) {
      $doesntexist = 0;
        $name = $v[1];
        $desc = $v[2];
        $price = $v[3];
        $path = $v[4];
        break;
    }
    else {
      $doesntexist = 1;
    }
}
   ?>

  <main>

    <!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <div class="infobox">
      <!-- <p>Size</p> -->
      <div id="formproduct">
        <img id="formproductimage" class="center" src="<?php echo "$path"; ?>"/></img>
      </div>

      <div id="information">
        <form name="order" action ="cart.php" onsubmit="return submitCheck()" method="post"> <!-- removed action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product"  -->
          <h1 name="name"><?php echo "$name"; ?></h1>
          <p class="center" id="descrip"><?php echo $desc; ?></p>
          <input type="hidden" name="name" value="<?php echo "$name"; ?>">
          <input type="hidden" name="id" value="<?php echo "$id"; ?>">
          <div class="buttonsizes center">
            <label class="container">S
              <input type="radio" checked="checked" name="option" value="small">
              <span class="checkmark"></span>
            </label>
            <label class="container">M
              <input type="radio" name="option" value="medium">
              <span class="checkmark"></span>
            </label>
            <label class="container">L
              <input type="radio" name="option" value="large">
              <span class="checkmark"></span>
            </label>
          </div>
          <br>
          <div id="inputbox">
            <script src="tools.js"></script>
            <p id="quantity">quantity</p>
            <input type="button" value="-" onclick='decrementValue()' name="decrease"></input>
            <input id="quantitynumber" type="number" name="qty" value="0" readonly>
            <input type="button" value="+" onclick='incrementValue()' name="increase"></input>
          </div>
          <span><p id="price"><?php echo "$".$price."ea"; ?></p></span>
          <input id="productprice" type="hidden" name="price" value="<?php echo "$price"; ?>">
          <div id="invalidwarning">Please enter a valid quantity!</div>
          <!-- TESTING LINE BELOW-->
          <input class="center button1" <?php if ($doesntexist == 1){ ?> disabled <?php   } ?> id="purchasebutton" type="submit" value="Purchase" name="submit"></input>
        </form>
      </div>
    </div>

    <!-- <div id="similar"> -->

    <h2>See Other Products:</h2>
    <div id="productgallery">
      <!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
      <div class="responsive">
        <div class="gallery">
          <a href="product.php">
            <img class="center" src="../../media/products/firArt.jpg"></img>
            <div class="desc">
              <span class="productname">Artificial Fir Tree</span> <!-- name -->
              <hr>
              <span>$200 - $350</span> <!-- price -->
            </div>
          </a>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <img class="center" src="../../media/products/pineGen.jpg"></img>
          <div class="desc">
            <span class="productname">Genuine Pine Tree</span> <!-- name -->
            <hr>
            <span>$200 - $350</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img class="center" src="../../media/products/pineArt.jpg"></img>
          <div class="desc">
            <span class="productname">Artificial Pine Tree</span> <!-- name -->
            <hr>
            <span>$200 - $350</span> <!-- price -->
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->

  </main>

  <?php
   include 'include/footer.php';
  ?>

</body>
</html>
