<header>
  <?php
session_start();
   ?>
  <div>
    <img src="../../media/ChristmasOnMain-logo.png" alt="Christmas On Main logo" class="center" href="index.php">
  </div>
</header>

<?php
$file = fopen('products.txt','r');
fgets($file);
while (!feof($file))
{
  $records[] = fgetcsv($file);
}
array_pop($records); //adds one too many for some reason
fclose($file);
 ?>
