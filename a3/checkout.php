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


    <?php include 'include/cart.php' ?>


    <div id="totals" class="center">
      <?php
      for ($v = 0; $v < $_SESSION['$cartquantity'];$v++)
      {
        $total = $total + ($_SESSION['$cart'][$v][3] * $_SESSION['$cart'][$v][1]);
      }

      // defining variables
      $fname = $lname = $email = $address = $telno = $creditcard = $expirydate = "";
      $fnameerror = $lnameerror = $emailerror = $addresserror = $telnoerror = $creditcarderror = $expirydateerror = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["fname"])) {
          $fnameerror= "First Name is required";
        } else {
          $fname = test_input($_POST["fname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z\s,.'-]*$/",$fname)) {
            $fnameerror = "First Name error";
          }
        }
        if (empty($_POST["lname"])) {
          $lnameerror= "Last Name is required";
        } else {
          $lname = test_input($_POST["lname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z\s,.'-]*$/",$lname)) {
            $lnameerror = "Last name error";
          }
        }
        if (empty($_POST["email"])) {
          $emailerror = "Email is required";
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
          }
        }
        if (empty($_POST["address"])) {
          $addresserror= "Address is required";
        } else {
          $address = test_input($_POST["address"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z0-9\s,.'-]*$/",$address)) {
            $addresserror = "Address error";
          }
        }
        if (empty($_POST["telno"])) {
          $telnoerror= "Phone number is required";
        } else {
          $telno = test_input($_POST["telno"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/",$telno)) {
            $telnoerror = "Phone number error";
          }
        }
        if (empty($_POST["creditcard"])) {
          $creditcarderror= "Credit card number is required";
        } else {
          $creditcard = test_input($_POST["creditcard"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[0-9\s]{12,19}$/",$creditcard)) {
            $creditcarderror = "Credit card error";
          }
          if (empty($_POST["expirydate"])) {
            $expirydateerror= "Credit card expiry date is required";
          } else {
            $expirydate = test_input($_POST["expirydate"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^(0[1-9]{1}|1[0-2]{1})\/\d{4}$/",$expirydate)) {
              $expirydateerror = "Credit card expiry date error";
            }
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
          <span class="error"><?php echo $fnameerror ?></span><br>
          <input type="text" name="lname" placeholder="Last Name"></input> <br>
          <span class="error"><?php echo $lnameerror ?></span><br>
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Email Address"></input><br>
          <span class="error"><?php echo $emailerror ?></span><br>
          <label>Address</label>
          <input type="text" name="address" placeholder="Address"</input><br>
          <span class="error"><?php echo $addresserror ?></span><br>
          <label>Phone Number</label>
          <input type ="text" name="telno" placeholder="Phone Number" value="<?php echo $telno;?>" ></input><br>
          <span class="error"><?php echo $telnoerror ?></span><br>
          <label>Credit Card Number</label>
          <input type="text" name="creditcard" placeholder="Credit Card" ></input><br>
          <span class="error"><?php echo $creditcarderror ?></span><br>
          <label>Expiry Date</label>
          <input type="text" name="expirydate" placeholder="Expiry Date"</input><br>
          <span class="error"><?php echo $expirydateerror;?></span><br>
          <input type="hidden" name="total" value="<?php $total ?>"</input><br>
          <input type="submit" name="submit" value="submit">

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
        echo $addresserror;
        ?>
      </div>

    </main>

    <?php
    include 'include/footer.php';
    ?>

  </body>
  </html>
