<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

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
			<li><a href="#">Log in</a></li>
		</ul>
    </nav>

    <main>
      <div id="outerloginbox" class="center">
        <h1 id="logintext">Log in</h1>

  <div class="innerloginbox" class="center">
      <form>
        <!-- <h5 class="logintext center">Username</h5> -->
        <input class="inputform center" type="text" placeholder="Username">
        <!-- <h5 class="logintext center">Password</h5> -->
        <input class="inputform center" type="password" placeholder="Password">
        <a id="forgotbutton"class="center" href="forgotbutton">Forgot password?</a>
        <input class="center" id="loginbutton" type="submit" value="Log in">

      </form>
  </div>
</div>

    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Dylan Sbogar - s3718036, Matthew Moloney - s3717566</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
