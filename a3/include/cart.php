<div>
  <div class="shopping-cart">
    <!-- Title -->
    <div class="title">
      Order Summary
    </div>
    <?php


    if (isset($_SESSION['$cartquantity']))
    {
    // Instructions if $_POST['value'] exist

    for ($x = 0; $x < $_SESSION['$cartquantity']; $x++)
    {
      echo '<div class="item">';
      echo  '<div class="image">';
      echo    '<img width="65px" src="'.$records[(int)$_SESSION['$cart'][$x][4]-1][4].'" alt="product image" /></div>';
      echo  '<div class="description">';
      echo    '<span>'.$_SESSION['$cart'][$x][0].'</span>';
      echo    '<span>'.$_SESSION['$cart'][$x][2].'</span>';
      echo  '</div>';
      echo  '<div class="quantity">';
      echo    '<input id="quantitynumber" type="number" name="qty" value="'.$_SESSION['$cart'][$x][1].'" readonly>';
      echo  '</div>';
      echo  '<div class="total-price">$'.$_SESSION['$cart'][$x][3].'</div>';
      echo  '</div>';

    }
}
    if ($_SESSION['$cartquantity'] == 0)
    {
      echo '<br><div class="center" >cart is empty</div>';
    }
    ?>
  </div>
</div>
