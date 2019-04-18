<html>
<title> Funcitons in PHP </title>
<body>

<?php
/*function greeting()
{
    echo "Hello user!"."<br>";
}
greeting(); //Calls the function

function Name($fname)
{
    echo "Hello ". $fname."<br>";
}
Name("Kevin"); //Outputs Hello Kevin

function fullname($fname, $lname)
{
    echo "Your full name is ". $fname . " " . $lname."<br>";
}
fullname("Kevin", "St. Michel"); //outputs Your full name is Kevin St. Michel

function dimensions ($length = 0, $width = 0)
{
    $Area = $length * $width;
    echo $Area."<br>";
}
dimensions (12, 16);
dimensions (12);
dimensions (0,5);
dimensions();

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}
Echo "5 + 7 = ".sum(5, 7)."<br>";
echo "12 + 2 = ".sum(12, 2)."<br>";

function Great ($num1 = 0, $num2 = 0)
{
    if ($num1 < $num2){
        echo $num1. " is less than ". $num2. "<br>";
    }
    elseif ($num1 > $num2){
        echo $num1. " is greater than ". $num2. "<br>";
    }

}
Great (2, 3);
Great (91, 4);
Great (100, 10);
Great (4, 62);
*/
function Astro ($month, $day)
{
    if ($month = 3 && $day > 20 || $month = 4 && $day < 21){
        echo "You are an Aries";
        //return "Aries";
        echo "Your hororscope is: You don't know the future and neither do stars";
    }
    elseif ($month = 4 && $day > 20 || $month = 5 && $day < 22){
        echo "You are a Taurus";
        return "Taurus";
        echo "Your hororscope is: Stop looking for hororscopes";
    }
    elseif ($month = 5 && $day > 21 || $month = 6 && $day < 22){
        echo "You are a Gemini";
        return "Gemini";
        echo "Your hororscope is: These aren't accurate";
    }
    elseif ($month = 6 && $day > 21 || $month = 7 && $day < 21){
        echo "You are a Cancer";
        return "Cancer";
        echo "Your hororscope is: Why are you looking at gas in space?";
    }
    elseif ($month = 7 && $day > 22 || $month = 8 && day < 24){
        echo"You are a Leo";
        return "Leo";
        echo "Your hororscope is: Go make your own future.";
    }
    elseif ($month = 8 && $day > 22 || $month = 9 && day < 24){
        echo"You are a Virgo";
        return "Virgo";
        echo "Your hororscope is: Practice the concept of common sense.";
    }
    elseif ($month = 9 && $day > 22 || $month = 10 && day < 24){
        echo"You are a Libra";
        return "Libra";
        echo "Your hororscope is: Go make your own future.";
    }
    elseif ($month = 10 && $day > 22 || $month = 11 && day < 24){
        echo"You are a Scorpio";
        return "Scorpio";
        echo "Your hororscope is: Go make your own future.";
    }
    elseif ($month = 11 && $day > 22 || $month = 12 && day < 24){
        echo"You are a Sagittarius";
        return "Sagittarius";
        echo "Your hororscope is: Go make your own future.";
    }
    elseif ($month = 12 && $day > 22 || $month = 1 && day < 24){
        echo"You are a Capricorn";
        return "Capricorn";
        echo "Your hororscope is: Go make your own future.";
    }
    elseif ($month = 1 && $day > 22 || $month = 2 && day < 24){
        echo"You are a Aquarius";
        return "Aquarius";
        echo "Your hororscope is: Go make your own future.";
    }
    elseif ($month = 2 && $day > 19 || $month = 3 && day < 21){
        echo"You are a Pisces";
        return "Pisces";
        echo "Your hororscope is: Go make your own future.";
    }
    else{echo "Try again";}

}
Astro (2, 25);
//Astro (5, 1);
//Astro (1, 7);
?>