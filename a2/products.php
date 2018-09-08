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
				<a href="javascript:void(0)" class="dropbtn">Products</a>
				<div class="dropdown-content">
					<a href="#trees">Trees</a>
					<a href="#decor">Decorations</a>
					<a href="#elves">Elves</a>
				</div>
			</li>
			<li><a href="login.php">Login</a></li>
		</ul>
    </nav>

    <main>
      <div id="productgallery">
	<!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <div class="responsive">
		<div class="gallery">
      <a href="product.php">
			<img class="center" src="https://i.imgur.com/QEPurWz.jpg"></img>
			<div class="desc">
        <span class="productname">Fir Christmas Tree</span> <!-- name -->
        <hr>
        <span>Artificial: No</span> <!-- artificial status -->
        <span>$200 - $350</span> <!-- price -->
       </div>
      </a>
    </div>
	</div>

	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://i.imgur.com/dsFMGRi.jpg"></img>
      <div class="desc">
        <span class="productname">Pine Christmas Tree</span> <!-- name -->
        <hr>
        <span>Artificial: No</span> <!-- artificial status -->
        <span>$200 - $350</span> <!-- price -->
       </div>
     	</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://i.imgur.com/MqxWcIJ.jpg"></img>
      <div class="desc">
        <span class="productname">Assorted Artificial Christmas Tree</span> <!-- name -->
        <hr>
        <span>Artificial: Yes</span> <!-- artificial status -->
        <span>$200 - $350</span> <!-- price -->
       </div>
     </div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://i.imgur.com/dsFMGRi.jpg"></img>
      <div class="desc">
        <span class="productname">Oak Christmas Tree</span> <!-- name -->
        <hr>
        <span>Artificial: No</span> <!-- artificial status -->
        <span>$200 - $350</span> <!-- price -->
       </div>
     </div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://i.imgur.com/dsFMGRi.jpg"></img>
      <div class="desc">
        <span class="productname">Chocolate Christmas Tree</span> <!-- name -->
        <hr>
        <span>Artificial: Yes</span> <!-- artificial status -->
        <span>$1000</span> <!-- price -->
       </div>
     </div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://i.imgur.com/dsFMGRi.jpg"></img>
      <div class="desc">
        <span class="productname">Fir Christmas Tree</span> <!-- name -->
        <hr>

        <span>Artificial: No</span> <!-- artificial status -->
        <span>$200 - $350</span> <!-- price -->
       </div>
  		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://i.imgur.com/dsFMGRi.jpg"></img>
      <div class="desc">
        <span class="productname">Fir Christmas Tree</span> <!-- name -->
        <hr>
        <span>Artificial: No</span> <!-- artificial status -->
        <span>$200 - $350</span> <!-- price -->
       </div>
     </div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://cdn.shopify.com/s/files/1/2119/1111/products/Christmas_Tree_Costume.jpg?v=1510096599" ></img>
      <div class="desc">
        <span class="productname">Christmas Tree Cosplay</span> <!-- name -->
        <hr>
        <span>Artificial: Yes</span> <!-- artificial status -->
        <span>$500</span> <!-- price -->
       </div>
     </div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img class="center" src="https://shop.coles.com.au/wcsstore/Coles-CAS/images/7/5/4/7545928.jpg"></img>
      <div class="desc">
        <span class="productname">A coles pack of lambingtons</span> <!-- name -->
        <hr>
        <span>Artificial: Probably</span> <!-- artificial status -->
        <span>$2.50</span> <!-- price -->
       </div>
     </div>
	</div>
</div>
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
