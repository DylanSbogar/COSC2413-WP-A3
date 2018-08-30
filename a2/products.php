<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Products</title>

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
              <a href="#trees">Trees</a>
              <a href="#decor">Decorations</a>
              <a href="#misc">Misc.</a>
            </div>
        </li>
      <!--  <li style="float:right"><a href="cart.php">Cart (0)</a></li> -->
        <li style="float:right"><a href="login.php">Login</a></li>
      </ul>
    </nav>

    <main>
      <h1>Products</h1>
      <h2><a name = "trees">Trees</a></h2>
      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineGen.jpg">
          <img src="5terre.jpg" alt="Genuine Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <h2><a name = "decor">Decorations</a></h2>
      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <h2><a name = "misc">Misc.</a></h2>
      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

      <div class="gallery">
        <a target="_blank" href="pineArt.jpg">
          <img src="5terre.jpg" alt="Artificial Pine Tree" width="300" height="300">
        </a>
        <div class="desc">Artificial Pine Tree</div>
      </div>

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
