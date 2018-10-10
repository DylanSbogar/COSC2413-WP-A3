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
      <!-- takes the products.txt file and puts it into the 2d array records[][]-->
      <?php
      $file = fopen('products.txt','r');
      while ($line = fgets($file))
      {
        $records[] = explode(",", $line);
      }
      fclose($file);
      ?>

      <!-- test to print data to a spreadsheet -->
      <table id="temptable" class="center">
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

    <div id="orderinfo" >
    <form method="post">
      <label>Full Name</label>
      <span id="inputTitle"Last Name</span><br>
      <input required type="text" name="fname" placeholder="First Name"></input>
      <input required type="text" name="lname" placeholder="Last Name"></input> <br>
      <label>Email Address</label>
      <input required type="email" name="$email" placeholder="Email Address"></input><br>
      <label>Phone Number</label>
      <input required type ="tel" name="telno" placeholder="Phone Number"></input><br>
      <label>Credit Card Number</label>
      <input required type="number" name="creditcard" placeholder="Credit Card"></input><br>
      <label>Expiry Date</label>
      <input required name="expirydate" placeholder="Expiry Date"</input><br>
       <input type="submit" name="submit" value="Purchase" />
    </form>
  </div>
  </main>

  <?php
  include 'include/footer.php';
  ?>

</body>
</html>
