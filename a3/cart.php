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
    <div class="shopping-cart">
      <!-- Title -->
      <div class="title">
        Cart
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
          <span>Product Name Line 1</span>
          <span>Product Name Line 2</span>
          <span>Size</span>
        </div>

        <div class="quantity">
          <script src="quantity.js"></script>
          <button class="minus-btn" type="button" name="decrease" onclick="decrementValue()">
            <img src="plus.svg" alt="" />
          </button>
          <input id="quantitynumber" type="text" name="qty" value="1">
          <button class="plus-btn" type="button" name="increase" onclick="incrementValue()">
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
          <span>Product Name Line 1</span>
          <span>Product Name Line 2</span>
          <span>Size</span>
        </div>

        <div class="quantity">
          <script src="quantity.js"></script>
          <button class="minus-btn" type="button" name="decrease" onclick="decrementValue()">
            <img src="plus.svg" alt="" />
          </button>
          <input id="quantitynumber" type="text" name="qty" value="1">
          <button class="plus-btn" type="button" name="increase" onclick="incrementValue()">
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
          <span>Product Name Line 1</span>
          <span>Product Name Line 2</span>
          <span>Size</span>
        </div>

        <div class="quantity">
          <script src="quantity.js"></script>
          <button class="minus-btn" type="button" name="decrease" onclick="decrementValue()">
            <img src="plus.svg" alt="" />
          </button>
          <input id="quantitynumber" type="text" name="qty" value="1">
          <button class="plus-btn" type="button" name="increase" onclick="incrementValue()">
            <img src="minus.svg" alt="" />
          </button>
        </div>

        <div class="total-price">$349</div>
      </div>
    </div>
  </main>

  <?php
  include 'include/footer.php';
  ?>

  </body>
  </html>
