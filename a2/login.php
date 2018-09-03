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
					<a href="products.php#trees">Trees</a>
					<a href="products.php#decor">Decorations</a>
					<a href="products.php#elves">Elves</a>
				</div>
			</li>
			<li><a href="#">Login</a></li>
		</ul>
    </nav>

    <main>
	<!-- Creative Commons image sourced from https://facebook.com/christmasonmain77 and used for educational purposes only -->
    <p>Now Open!</p>
	<p>Thursdays-Fridays: 10am - 4pm</p>
	<p>Saturdays: 10am - 3pm</p>	
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