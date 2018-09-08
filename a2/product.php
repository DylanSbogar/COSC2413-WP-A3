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
      <li><a class="active" href="index.php">Home</a></li>
      <li class="dropdown">
        <a href="products.php" class="dropbtn">Products</a>
        <div class="dropdown-content">
          <a href="products.php#trees">Trees</a>
          <a href="products.php#decor">Decorations</a>
          <a href="products.php#elves">Elves</a>
        </div>
      </li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <main>
    <!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <h1>Fir Christmas Tree</h1>
    <div class="test" align="center">
      <!-- <p>Size</p> -->
      <div id="formproduct" class="center">
        <img src="https://i.imgur.com/QEPurWz.jpg" height="350" />
        <div id="information" align="right">
          <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="get" target="_blank">
            <span id="price"><p>$150.00</p></span>
            <input type="hidden" name="id" value="t001">
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
            <input type="number" name="qty" placeholder="quantity">
            <input class="center" id="purchasebutton" type="submit" value="Purchase">
          </form>
        </div>
      </div>
    </div>

    <!-- <div id="similar"> -->
    <h2>See Other Products:</h2>
    <div class="wrapper">
      <div class="scrolls">
        <div class="imageDiv">
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
          <img src="http://placehold.it/250x250" />
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
