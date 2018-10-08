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
    <div id="productgallery">
      <div class="responsive">
        <div class="gallery">
          <a href="product.php">
            <!-- Original image below sourced for educational purposes: http://christmastreesdelivered.co.uk -->
            <img class="center" src="../../media/products/firGen.jpg"></img>
            <div class="desc">
              <span class="productname"> Genuine Fir Tree</span> <!-- name -->
              <hr>
              <span>$200 - $350</span> <!-- price -->
            </div>
          </a>
        </div>
      </div>

      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: https://www.allinone.co.uk -->
          <img class="center" src="../../media/products/firArt.jpg"></img>
          <div class="desc">
            <span class="productname">Artificial Fir Tree</span> <!-- name -->
            <hr>
            <span>$200 - $350</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: https://www.xmastree.com.au -->
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
          <!-- Original image below sourced for educational purposes: http://ii.christmastreeshops.com -->
          <img class="center" src="../../media/products/pineArt.jpg"></img>
          <div class="desc">
            <span class="productname">Artificial Pine Tree</span> <!-- name -->
            <hr>
            <span>$200 - $350</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: https://www.costumebox.com.au -->
          <img class="center" src="../../media/products/christmasCosplay.jpg"></img>
          <div class="desc">
            <span class="productname">Tree Costume</span> <!-- name -->
            <hr>
            <span>$1000</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: http://www.ithinkdifferently.me -->
          <img class="center" src="../../media/products/lights.jpg"></img>
          <div class="desc">
            <span class="productname">Christmas Lights 10m</span> <!-- name -->
            <hr>

            <span>$200 - $350</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: https://www.snapdeal.com -->
          <img class="center" src="../../media/products/ornaments.jpg"></img>
          <div class="desc">
            <span class="productname">Christmas Ornaments</span> <!-- name -->
            <hr>
            <span>$25 - $50</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: https://shop.siamusic.net -->
          <img class="center" src="../../media/products/treetopper.jpg" ></img>
          <div class="desc">
            <span class="productname">Tree Topper</span> <!-- name -->
            <hr>
            <span>$35</span> <!-- price -->
          </div>
        </div>
      </div>
      <div class="responsive">
        <div class="gallery">
          <!-- Original image below sourced for educational purposes: https://target.scene7.comused -->
          <img class="center" src="../../media/products/wreath.jpg"></img>
          <div class="desc">
            <span class="productname">Wreath</span> <!-- name -->
            <hr>
            <span>$70</span> <!-- price -->
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php
   include 'include/footer.php';
  ?>

</body>
</html>
