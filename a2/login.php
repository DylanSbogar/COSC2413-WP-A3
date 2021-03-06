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
      <li><a href="index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="#">Login</a></li>
    </ul>
  </nav>

  <main id="loginmain">
    <div id="outerloginbox" class="center">
      <h1 id="logintext">Login</h1>

      <div class="innerloginbox" class="center">
        <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=login" method="post">
          <input class="inputform center" type="email" name="email" placeholder="Email Address">
          <input class= "inputform center" type="password" name="password" placeholder="Password">
          <input class="center" id="loginbutton" type="submit" value="Login">
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
