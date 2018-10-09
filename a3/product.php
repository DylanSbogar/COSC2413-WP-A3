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
if (empty($_SESSION['cart']))
{
  $_SESSION['cart'] = array();
}
   ?>

  <main>
    <!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <div class="infobox">
      <!-- <p>Size</p> -->
      <div id="formproduct">
        <img id="formproductimage" class="center" src="../../media/products/firGen.jpg"/></img>
      </div>

      <div id="information">
        <form name="order" action ="cart.php" onsubmit="return submitCheck()" method="post"> <!-- removed action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product"  -->
          <h1 name="name">Genuine Fir Tree</h1>
          <input type="hidden" name="name" value="Genuine Fir Tree">
          <input type="hidden" name="id" value="t001">
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
            <script src="quantity.js"></script>
            <p id="quantity">quantity</p>
            <input type="button" value="-" onclick='decrementValue()' name="decrease"></input>
            <input id="quantitynumber" type="number" name="qty" placeholder="0" readonly>
            <input type="button" value="+" onclick='incrementValue()' name="increase"></input>
          </div>
          <span id="price"><p>$300</p></span>
          <div id="invalidwarning">Please enter a valid quantity!</div>
          <!-- TESTING LINE BELOW-->
          <input class="center" id="purchasebutton" type="submit" value="Purchase"></input>
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
