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
  // if (isset($_POST['submit'])) {
  //   if(filter_var($email,FILTER_VAR_EMAIL)) {
  //     echo ("$email is valid");
  //   } else {
  //     echo ("$email is invalid");
  //   }
  // }

   ?>



<?php
include 'include/header.php';
?>


<main>
<?php
 if(isset($_POST['submit'])){
    //collect form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $telno = $_POST['telno'];
    $address = $_POST['address'];
    $subtotal = $_POST['total'];

    $handle = fopen("orders.txt","a");
    foreach ($_SESSION['$cart'] as $q)
    {
      $id = $q[4];
      $quantity = $q[1];
      $unitprice = $q[3];
      $purchase = $q[2]." ".$q[0];
      $oid = 5;
      $line = "\n$purchase\t$date\t$fname\t$lname\t$address\t$telno\t$email\t$id\t$oid\t$quantity\t$unitprice\t$subtotal";
      fputs($handle, $line);
    }
    fclose($handle);



    //if no errors carry on

        # Title of the CSV
        // $Content = "Name, Email\n";
        //
        // //set the data of the CSV
        // $Content .= "$name, $email\n";
        //
        // # set the file name and create CSV file
        // $FileName = "formdata-".date("d-m-y-h:i:s").".csv";
        // header('Content-Type: application/csv');
        // header('Content-Disposition: attachment; filename="' . $FileName . '"');
        // echo $Content;
        // exit();
}





?>

</main>

<?php
 include 'include/footer.php';
?>

</body>
</html>
