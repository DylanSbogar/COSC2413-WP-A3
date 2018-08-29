<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
	<style>	
	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

	li {
		float: left;
	}

	li a, .dropbtn {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover, .dropdown:hover .dropbtn {
		background-color: red;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		column-count: 3;
		column-gap: 15px;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
	}

	.dropdown-content a:hover {background-color: #f1f1f1}

	.dropdown:hover .dropdown-content {
		display: block;
	}
	</style>
  </head>

  <body>

    <header>
      <div><img src='../../media/ChristmasOnMain-logo.png' alt='Christmas On Main logo' height='240'></img></div>
    </header>

    <nav>
     <ul>
		<li><a href="#home">Home</a></li>
		<li class="dropdown">
			<a href="javascript:void(0)" class="dropbtn">Products</a>
			<div  class="dropdown-content">
				<a style="font-size: 20px" href="#">Trees</a>
				<a href="#">Artificial</a>
				<a href="#">Pine</a>
				<a href="#">Oak</a>
				<a href="#">Tree3</a>
				<a style="font-size: 20px" href="#">Decorations</a>
				<a href="#">Decor1</a>
				<a href="#">Decor2</a>
				<a href="#">Decor3</a>
				<a href="#">Lights</a>
				<a style="font-size: 20px" href="#">Third Product Type</a>
				<a href="#">Test1</a>
				<a href="#">Test2</a>
				<a href="#">Test3</a>
				<a href="#">Test4</a>
			</div>
		</li>
		<li><a href="#news">Cart</a></li>
		
	</ul>	
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Dylan Sbogar - s3718036</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
