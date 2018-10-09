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
    <div class="center">
  <table id="carttable" class="center">
    <tr>
      <td> Product</td>
      <td> Price</td>
      <td> Quantity</td>
    </tr>
    <tr>
      <td> 0 </td>
      <td> 0 </td>
      <td> 0 </td>
    </table>
  </div>
  </main>

    <?php
    include 'include/footer.php';
    ?>

  </body>
  </html>
