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
      $errors = 0;

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["fname"])) {
          $fnameerror= "First Name is required";
          $errors++;
        } else {
          $fname = test_input($_POST["fname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z\s,.'-]*$/",$fname)) {
            $fnameerror = "First Name error";
            $errors++;
          }
        }
        if (empty($_POST["lname"])) {
          $lnameerror= "Last Name is required";
          $errors++;
        } else {
          $lname = test_input($_POST["lname"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z\s,.'-]*$/",$lname)) {
            $lnameerror = "Last name error";
            $errors++;
          }
        }
        if (empty($_POST["email"])) {
          $emailerror = "Email is required";
          $errors++;
        } else {
          $email = test_input($_POST["email"]);
          // check if e-mail address is well-formed
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Invalid email format";
            $errors++;
          }
        }
        if (empty($_POST["address"])) {
          $addresserror= "Address is required";
          $errors++;
        } else {
          $address = test_input($_POST["address"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z0-9\s,.'-]*$/",$address)) {
            $addresserror = "Address error";
            $errors++;
          }
        }
        if (empty($_POST["telno"])) {
          $telnoerror= "Phone number is required";
          $errors++;
        } else {
          $telno = test_input($_POST["telno"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$/",$telno)) {
            $telnoerror = "Phone number error";
            $errors++;
          }
        }
        if (empty($_POST["creditcard"])) {
          $creditcarderror= "Credit card number is required";
          $errors++;
        } else {
          $creditcard = test_input($_POST["creditcard"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[0-9\s]{12,19}$/",$creditcard)) {
            $creditcarderror = "Credit card error";
            $errors++;
          }
          if (empty($_POST["expirydate"])) {
            $expirydateerror= "Credit card expiry date is required";
            $errors++;
          } else {
            $expirydate = test_input($_POST["expirydate"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^(0[1-9]{1}|1[0-2]{1})\/\d{4}$/",$expirydate)) {
              $expirydateerror = "Credit card expiry date error";
              $errors++;
            }
          }
          if($errors == 0) {
            header('location: receipt.php');
            $_SESSION['fname'] = $fname;
            $_SESSION['lname'] = $lname;
            $_SESSION['email'] = $email;
            $_SESSION['address'] = $address;
            $_SESSION['telno'] = $telno;
            $_SESSION['oid'] = mt_rand();
            $_SESSION['total'] = $total;
            date_default_timezone_set("Australia/Melbourne");
            $_SESSION['date'] = date("Y-m-d h:i:sa");


            $handle = fopen("orders.txt","a");
            foreach ($_SESSION['$cart'] as $q)
            {
              $id = $q[4];
              $quantity = $q[1];
              $unitprice = $q[3];
              $purchase = $q[2]." ".$q[0];
              $line = "\n$purchase\t$_SESSION['date']\t$fname\t$lname\t$address\t$telno\t$email\t$id\t$oid\t$quantity\t$unitprice\t$subtotal";
              fputs($handle, $line);
            }
            fclose($handle);
            exit();
          }
        }
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
          <input type ="text" name="telno" placeholder="Phone Number"></input><br>
          <span class="error"><?php echo $telnoerror ?></span><br>
          <label>Credit Card Number</label>
          <input type="text" name="creditcard" placeholder="Credit Card" ></input><br>
          <span class="error"><?php echo $creditcarderror ?></span><br>
          <label>Expiry Date</label>
          <input type="text" name="expirydate" placeholder="Expiry Date (e.g. 04/2020)"</input><br>
          <span class="error"><?php echo $expirydateerror;?></span><br>
          <input type="hidden" name="total" value="<?php $total ?>"</input><br>
          <input type="submit" name="submit" value="submit">
        </form>
      </div>



    </main>

    <?php
    include 'include/footer.php';
    ?>

  </body>
  </html>
