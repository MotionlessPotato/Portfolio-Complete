<html>
<title> PHP strings </title>
<body>

<?php
echo strlen("Hello world"). '<br>'; //outputs 11
echo strrev("Hello world"). '<br>';
echo strpos("Hello world", "world"). '<br>'; //outputs 6
echo str_replace("World","Earth","Hello World"). '<br>'; //outputs Hello Earth
$Names = "Alex, Pahnia, Yumi, Spencer";
echo $Names. '<br>';
$Names = str_replace("Alex", "Kevin", $Names). '<br>';
echo $Names. '<br>';

$Names = substr($Names, 0, strpos($Names, "Kevin"))."Alex, ".substr($Names, strpos($Names, "Kevin")). '<br';
echo $Names. '<br>';

?>
</body>
</html>