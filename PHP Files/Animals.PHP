<html>
<title> PHP Arrays </title>
<body>

<?php
//PHP ARRAYS
$animals = array("cats","dogs","rabbits");
// in PHP, there are three types of arrays:
    //indexed array - array with a numeric inded(list in python)
    //associated array - array with named keys(dicctionary in python)
        //$Class = array("Marcus" => "D1", 
        //"Joseph => "d2", "Chris B" => "C2",);
        //$Class ['Joel'] = "D5";
        //Search our array (By key or value)
            //echo "Marcus is in seat ".$Class['Marcus']. ". <br>"
        //Loop through array
            //foreach ($class as $x => x_value){
                //echo $x." is in seat ".$x_value."<br>";
            //}
    //MultiDimensional arrays- arrays containing arrays
//php indexed arrays
    //Note: can also assign elements of an array manually
$animals[3] = "badgers";
echo "I like ".$animals[0]."<br>";
for ($x=0; $x<count($animals);$x++)
{
    echo $animals[$x]."<br>";
}

?>