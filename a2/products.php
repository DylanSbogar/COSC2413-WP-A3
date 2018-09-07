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
				</div>*
			</li>
			<li><a href="login.php">Login</a></li>
		</ul>
    </nav>

    <main>
	<!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <div class="responsive">
		<div class="gallery">
      <a href="product.php">
			<img src="../../media/gallery-1.jpg" width="300"></img>
			<div class="desc">Fir Christmas Tree (click me)<br>$200 - $350</div>
      </a>
    </div>
	</div>

	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-2.jpg" width="300"></img>
			<div class="desc">Pine Christmas Tree<br> $150 - $300</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-4.jpg" width="300"></img>
			<div class="desc">Assorted Artificial Christmas Trees <br> $75 - $250</div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-6.jpg" width="300"></img>
			<div class="desc"></div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-8.jpg" width="300"></img>
			<div class="desc"></div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-7.jpg" width="300"></img>
			<div class="desc"></div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-7.jpg" width="300"></img>
			<div class="desc"></div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-7.jpg" width="300"></img>
			<div class="desc"></div>
		</div>
	</div>
	<div class="responsive">
		<div class="gallery">
			<img src="../../media/gallery-7.jpg" width="300"></img>
			<div class="desc"></div>
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
