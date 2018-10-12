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


  <main>
    <div class="center receiptbuyerdetails">
      <div class="receiptorderdetails">
        <span id="billedto">Order details:</span> <br>
        <?php echo "Time of purchase:<br>".$_SESSION['date'] ?><br>
      </div>
      <span id="billedto">Billed to:</span> <br>

      <?php echo $_SESSION['fname'] ." ". $_SESSION['lname'] ?><br>
      <?php echo $_SESSION['address'] ?><br>
      <?php echo "Telephone Number: " .$_SESSION['telno'] ?><br>
      <?php echo "Card Number: ".$_SESSION['creditcard'] ?><br>
      <?php echo "Expiry Date: " .$_SESSION['expirydate'] ?><br>


    </div>

    <table id="checkouttable" class="center">
      <tr>
        <th>Product Name</th>
        <th>Option</th>
        <th>Quantity</th>
        <th>Price (Unit)</th>
        <th>Total Price</th>
      </tr>
      <?php
      if (isset($_SESSION['$cartquantity']))
      {
        for ($x = 0; $x < $_SESSION['$cartquantity']; $x++)
        {
          echo "<tr>";
          echo  "<td>".$_SESSION['$cart'][$x][0]."</td>";
          echo  "<td>".$_SESSION['$cart'][$x][2]."</td>";
          echo  "<td>".$_SESSION['$cart'][$x][1]."</td>";
          echo  "<td>$".(int)$_SESSION['$cart'][$x][3]."</td>";
          echo  "<td>$".($_SESSION['$cart'][$x][3]*$_SESSION['$cart'][$x][1])."</td>";
          echo "</tr>";
        }
      }
      ?>
    </table>
    <div class="center totalprice">
      <?php echo "Total Price: $" .$_SESSION['total'].".00" ?>
    </div>
  </main>

  <?php
  include 'include/footer.php';
  ?>

</body>
</html>
