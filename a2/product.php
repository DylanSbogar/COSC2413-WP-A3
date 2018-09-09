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

  <header>
    <div>
      <!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
      <img src="../../media/ChristmasOnMain-logo.png" alt="Christmas On Main logo" class="center">
    </div>
  </header>

  <nav class="nav">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <main>
    <!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <div class="infobox">
      <!-- <p>Size</p> -->
      <div id="formproduct">
        <img class="center" src="../../media/products/firGen.jpg"/></img>
      </div>

      <div id="information">
        <h1>Genuine Fir Tree</h1>
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post">
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
            <input id="quantitynumber" type="number" name="qty" readonly>
            <input type="button" value="+" onclick='incrementValue()' name="increase"></input>
          </div>
          <span id="price"><p>$200.00 - $350.00</p></span>
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

  <footer>
    <div>&copy;<script>
    document.write(new Date().getFullYear());
    </script> Dylan Sbogar: s3718036 & Matthew Moloney: s3717566.<br>"Group Name"</br></div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>

</body>
</html>
