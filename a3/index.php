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

  <nav class="nav">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </nav>

  <main>
    <p class="openInfo">Now Open! <br>Thursdays-Fridays: 10am - 4pm<br>Saturdays: 10am - 3pm</p>

    <h1>Gallery</h1>
    <!-- Original images below sourced for educational purposes: https://facebook.com/christmasonmain77 -->
    <div id="productgallery">
      <div class="responsive">
        <div class="gallery">
          <img class="center" src="../../media/gallery/gallery-2.jpg"></img>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <img class="center"  src="../../media/gallery/gallery-1.jpg"></img>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img  class="center" src="../../media/gallery/gallery-4.jpg"></img>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img class="center"  src="../../media/gallery/gallery-8.jpg"></img>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img class="center"  src="../../media/gallery/gallery-6.jpg"></img>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <img class="center"  src="../../media/gallery/gallery-7.jpg"></img>
        </div>
      </div>
    </div>
  </main>

   <!-- <footer>
    <div>&copy;<script>
    document.write(new Date().getFullYear());
    </script> Dylan Sbogar: s3718036 & Matthew Moloney: s3717566.<br>"Group Name"</br></div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>  -->

  <?php
   include 'include/footer.php';
  ?>

</body>
</html>
