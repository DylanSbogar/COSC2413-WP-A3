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
    <div>

      <?php
      $file = fopen('products.txt','r');
      while ($line = fgets($file))
      {
        $records[] = explode(",", $line);
      }
      // print_r($records);
      fclose($file);
      // print_r($records[1][3]);


      ?>
      <table id="temptable">
      <tr>
      <td><?php echo $records[0][0] ?></td>
      <td><?php echo $records[0][1] ?></td>
      <td><?php echo $records[0][2] ?></td>
      <td><?php echo $records[0][3] ?></td>
      <td><?php echo $records[0][4] ?></td>
      </tr>
      <tr>
      <td><?php echo $records[1][0] ?></td>
      <td><?php echo $records[1][1] ?></td>
      <td><?php echo $records[1][2] ?></td>
      <td><?php echo $records[1][3] ?></td>
      <td><?php echo $records[1][4] ?></td>
      </tr>
      </table>

    </div>

  </main>
  <?php
  include 'include/footer.php';
  ?>

</body>
</html>
