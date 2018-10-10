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

      <!-- PLACEHOLDER CART, MUST BE UPDATED WITH FUNCTIONAL CART -->
    <div class="shopping-cart">
     <!-- Title -->
     <div class="title">
       Order Summary
     </div>

     <!-- Product #1 -->
     <div class="item">
       <div class="buttons">
         <span class="delete-btn"></span>
         <span class="like-btn"></span>
       </div>

       <div class="image">
         <img src="item-1.png" alt="" />
       </div>

       <div class="description">
         <span>Common Projects</span>
         <span>Bball High</span>
         <span>White</span>
       </div>

       <div class="quantity">
         <button class="plus-btn" type="button" name="button">
           <img src="plus.svg" alt="" />
         </button>
         <input type="text" name="name" value="1">
         <button class="minus-btn" type="button" name="button">
           <img src="minus.svg" alt="" />
         </button>
       </div>

       <div class="total-price">$549</div>
     </div>

     <!-- Product #2 -->
     <div class="item">
       <div class="buttons">
         <span class="delete-btn"></span>
         <span class="like-btn"></span>
       </div>

       <div class="image">
         <img src="item-2.png" alt=""/>
       </div>

       <div class="description">
         <span>Maison Margiela</span>
         <span>Future Sneakers</span>
         <span>White</span>
       </div>

       <div class="quantity">
         <button class="plus-btn" type="button" name="button">
           <img src="plus.svg" alt="" />
         </button>
         <input type="text" name="name" value="1">
         <button class="minus-btn" type="button" name="button">
           <img src="minus.svg" alt="" />
         </button>
       </div>

       <div class="total-price">$870</div>
     </div>

     <!-- Product #3 -->
     <div class="item">
       <div class="buttons">
         <span class="delete-btn"></span>
         <span class="like-btn"></span>
       </div>

       <div class="image">
         <img src="item-3.png" alt="" />
       </div>

       <div class="description">
         <span>Our Legacy</span>
         <span>Brushed Scarf</span>
         <span>Brown</span>
       </div>

       <div class="quantity">
         <button class="plus-btn" type="button" name="button">
           <img src="plus.svg" alt="" />
         </button>
         <input type="text" name="name" value="1">
         <button class="minus-btn" type="button" name="button">
           <img src="minus.svg" alt="" />
         </button>
       </div>

       <div class="total-price">$349</div>
     </div>
   </div>
    </div>

    <div id="totals" class="center">
      <span>Subtotal: $xxx.xx</span> <br>
      <span>+ shipping: $xx.xx</span> <br>
      <span>Total: $xxx.xx</span> <br>
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
