<?PHP
//PHP ARRAYS
$animals = array("cats","dogs","rabbits");
// in PHP, there are three types of arrays:
    //indexed array - array with a numeric inded(list in python)
    //associated array - array with named keys(dicctionary in python)
    //MultiDimensional arrays- arrays containing arrays
//php indexed arrays
    //Note: can also assign elements of an array manually
$animals[3] = "badgers";
echo "I like".$animals[0]."<br>";
for ($x=0; $x<count($animals);$x++)
{
    echo $animals[$x]."<br>";
}

?>