<html>
<title> Review PHP </title>
<body>

<?php
//Array is the first one
//Day of the week is the second
//Doesn't nessesarily us the date function for the third
$average = 0;
$total = 0;
$numbers = array(3, 43, 21, 64, 5, 7, 1, 87, 93, 62);

$total = $numbers[0] +  $numbers[1] +  $numbers[2] +  $numbers[3] +  $numbers[4] +  $numbers[5] +  $numbers[6] +  $numbers[7] +  $numbers[8] +  $numbers[9];
$average = $total / count($numbers);
echo "My number list is". "<br>";
for ($x=0; $x<count($numbers);$x++)
{
    echo $numbers[$x]."<br>";
}
echo ("The average of my number list is ". $average). "<br>";
date_default_timezone_set("America/Chicago");
$time = date("l");
if ($time == "Monday"){
    echo "I hate Mondays". '<br>';
}
elseif ($time == "Tuesday"){
    echo "I have nothing to do on Tuesday". '<br>';
}
elseif ($time == "Wednesday"){
    echo "HUMP DAY!". '<br>';
}
elseif ($time == "Thursday"){
    echo "The wee is almost done. It's Thursday". '<br>';
}
elseif ($time == "Friday"){
    echo "TGIF". '<br>';
}
elseif ($time == "Saturday"){
    echo "The weekend is here!". '<br>';
}
elseif ($time == "Saturday"){
    echo "Ready for a new week?". '<br>';
}



echo "Today is ".date("F")." ".date("j"). ", ".date("Y")."."."<br>";

?>