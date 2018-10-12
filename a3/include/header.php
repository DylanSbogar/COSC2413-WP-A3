<header>
  <?php
session_start();
   ?>
  <div>
    <a href="index.php"><img src="../../media/ChristmasOnMain-logo.png" alt="Christmas On Main logo" class="center"></a>
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
