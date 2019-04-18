<html>
<title> PHP example </title>
<body>

<?php
echo "Hello World".'<BR>'; //This prints plaine text to our page
$txt = "Hello World".'<br>';
echo $txt;
echo "My first program is called ". $txt . "";

//GLOBAL: Defined outside of a fucntion, BUT can only be accessed
//OUTSIDE of a function
//LOCAL: Defined inside of a function, BUT can onyl be accessed 
//INSIDE a function
// EX $x = 5 <-- Global Variable
//function varTest() {
    // Defining x outside the function will return an error
//echo "variable x is" .$x;
//varTest();
//GLOBAL keyword
//global is used to access a variable inside a function
//STATIC 
//Not cleared by a cashe
$x = 5;
$y = 0;
echo "variable x is: ". $x.'<br>';
 function varTest2() {
    global $y;
    $y = 10;
    echo "<br>".$y."is my first number";
}
varTest2();
$z = $x + $y; //This is a computation
echo "<br>". "x and y make " .$z. '<br>';
$z = $x . $y; //This is a concatination

date_default_timezone_set("America/Chicago");
$time = date("H");
if ($time >= 12 && $time<17) {
    echo"Good afternoon";
}
elseif ($time >= 17) {
    echo "Good night";
}
else {
    echo "Good morning";
}
echo '<br>';

echo date("H")

?>

</body>
</html>
