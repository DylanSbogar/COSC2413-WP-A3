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


      <!-- PLACEHOLDER CART, MUST BE UPDATED WITH FUNCTIONAL CART -->
      <div class="shopping-cart">
        <!-- Title -->
        <div class="title">
          Order Summary
        </div>

        <!-- Product #1 -->
        <?php
        for ($x = 0; $x < $_SESSION['$cartquantity']; $x++)
        {
          echo '<div class="item">';

          echo  '<div class="image">';
          echo    '<img src="item-1.png" alt="" />';
          echo  '</div>';

          echo  '<div class="description">';
          echo    '<span>'.$_SESSION['$cart'][$x][0];
          echo  '</span>';
          echo    '<span>'.$_SESSION['$cart'][$x][2];
          echo '</span>';
          echo  '</div>';

          echo  '<div class="quantity">';
          echo    '<script src="tools.js"></script>';
          // echo '<form>'
          // echo    '<button class="minus-btn" type="button" name="decrease" onclick="decrementValue()">';
          // echo      '-';
          // echo   ' </button>';
          echo    '<input id="quantitynumber" type="number" name="qty" value="'.$_SESSION['$cart'][$x][1].'" readonly>';
          // echo    '<button class="plus-btn" type="button" name="increase" onclick="incrementValue()">';
          // echo      '+';
          // echo    '</button>';
          echo  '</div>';
          echo  '<div class="total-price">$'.$_SESSION['$cart'][$x][3].'</div>';
          echo      '</div>';

          //TODO in here
          //fix quantity, save it to the array
          //fix the quantity increment buttons
          //neaten up design
        }
        ?>
      </div>
    </div>

    <div id="totals" class="center">
      <?php
      for ($v = 0; $v < $_SESSION['$cartquantity'];$v++)
      {
        $total = $total + ($_SESSION['$cart'][$v][3] * $_SESSION['$cart'][$v][1]);
      }

      // defining variables
      $fname = $lname = $email = $address = $telno = $creditcard = $expirydate = $error =  "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["fname"])) {
          $error= "First Name is required";
        } else {
          $fname = test_input($_POST["fname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z\s,.'-]*$/",$fname)) {
            $error = "Only letters and white space allowed";
          }
        }
        if (empty($_POST["lname"])) {
          $error= "Last Name is required";
        } else {
          $lname = test_input($_POST["lname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z\s,.'-]*$/",$lname)) {
            $error = "Last name error";
          }
        }

        // $fname = test_input($_POST["fname"]);
        // $lname = test_input($_POST["lname"]);
        // $email = test_input($_POST["email"]);
        // $address = test_input($_POST["address"]);
        // // $telno = test_input($_POST["telno"]);
        // $creditcard = test_input($_POST["creditcard"]);
        // $expirydate = test_input($_POST["expirydate"]);
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      ?>

      <span>Total: $<?php echo $total?></span> <br>
    </div>

    <div id="orderinfo" >
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <label>Full Name</label>
        <span id="inputTitle"Last Name</span><br>
          <input type="text" name="fname" placeholder="First Name"></input>
          <input type="text" name="lname" placeholder="Last Name"></input> <br>
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Email Address"></input><br>
          <label>Address</label>
          <input type="text" name="address" placeholder="Address"</input><br>
          <label>Phone Number</label>
          <input type ="text" name="telno" placeholder="Phone Number" value="<?php echo $telno;?>" ></input><br>
          <span class="error"><?php echo $telnoError;?></span>
          <label>Credit Card Number</label>
          <input type="number" name="creditcard" placeholder="Credit Card" ></input><br>
          <!-- pattern="^4[0-9]{12}(?:[0-9]{3})?$" -->
          <label>Expiry Date</label>
          <input name="expirydate" placeholder="Expiry Date"</input><br>
          <input type="hidden" name="total" value="<?php $total ?>"</input><br>

          <input type="submit" name="submit" value="submit">

          <p id="demo"></p>

          <script>
          var d = new Date();
          document.getElementById("demo").innerHTML = d;
          </script>
        </form>

        <?php
        echo "<h2>Your Input:</h2>";
        echo $fname;
        echo "<br>";
        echo $lname;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $address;
        echo "<br>";
        echo $telno;
        echo "<br>";
        echo $creditcard;
        echo "<br>";
        echo $expirydate;
        echo "<br>";
        echo $error;
        ?>
      </div>
    </main>



    <?php
    include 'include/footer.php';
    ?>

  </body>
  </html>
