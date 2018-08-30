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
      <div class="center"><img src='../../media/ChristmasOnMain-logo.png' alt='Christmas On Main logo' height='240'></img></div>
    </header>

    <nav>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li class="dropdown">
            <a href="#" class="dropbtn">Products</a>
            <div class="dropdown-content">
              <a href="products.php#trees">Trees</a>
              <a href="products.php#decor">Decorations</a>
              <a href="products.php#misc">Misc.</a>
            </div>
        </li>
      <!--  <li style="float:right"><a href="#cart">Cart (0)</a></li> -->
        <li style="float:right"><a href="login.php">Login</a></li>
      </ul>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/ChristmasOnMain-glamor.png' alt='Christmas On Main Open Now' />
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
