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

   <!-- takes the products.txt file and puts it into the 2d array records[][]-->
   <?php
   $file = fopen('products.txt','r');
   fgets($file);
   while (!feof($file))
   {
     $records[] = fgetcsv($file);
     echo $records[9];
   }
   fclose($file);


   if (isset($_POST['cancel'])) {
     session_destroy();
   }
   ?>

  <main>
    <div id="productgallery">
<?php
      foreach ($records as $value1)
      {
     echo   '<div class="responsive">';
     echo     '<div class="gallery">';
     echo       '<a href="productTest.php?id=' . $value1[0] . '">';
     echo         "<!-- Original image below sourced for educational purposes: http://christmastreesdelivered.co.uk -->";
     echo         '<img class="center" src="'. $value1[4].'"></img>';
     echo         '<div class="desc">';
     echo            '<span class="productname">'. $value1[1]."</span> <!-- name -->";
     echo           "<hr>";
     echo           "<span>$".$value1[3]."</span> <!-- price -->";
     echo         "</div>";
     echo       "</a>";
     echo     "</div>";
     echo   "</div>";
   }
     ?>
    </div>
  </main>

  <?php
   include 'include/footer.php';
  ?>

</body>
</html>
