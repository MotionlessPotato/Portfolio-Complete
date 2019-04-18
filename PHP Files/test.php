<?PHP

function Astro ($month, $day)
{
    $sign = "";
    if (($month == 3 && $day > 20) || ($month == 4 && $day < 21)){
        echo "You are an Aries". "<br>";
        $sign = "Aries";
        return $sign;
    }
    else if (($month == 4 && $day > 20) || ($month == 5 && $day < 22)){
        echo "You are a Taurus". "<br>";
        $sign = "Taurus";
        return $sign;
    }
    elseif (($month == 5 && $day > 21) || ($month == 6 && $day < 22)){
        echo "You are a Gemini". "<br>";
        $sign = "Gemini";
        return $sign;
    }
    elseif (($month == 6 && $day > 21) || ($month == 7 && $day < 21)){
        echo "You are a Cancer". "<br>";
        $sign = "Cancer";
        return $sign;
    }
    elseif (($month == 7 && $day > 22) || ($month == 8 && $day < 24)){
        echo"You are a Leo". "<br>";
        $sign = "Leo";
        return $sign;
    }
    elseif (($month == 8 && $day > 22) || ($month == 9 && $day < 24)){
        echo"You are a Virgo". "<br>";
        $sign = "Virgo";
        return $sign;
    }
    elseif (($month == 9 && $day > 22) || ($month == 10 && $day < 24)){
        echo"You are a Libra". "<br>";
        $sign = "Libra";
        return $sign;
    }
    elseif (($month == 10 && $day > 22) || ($month == 11 && $day < 24)){
        echo"You are a Scorpio". "<br>";
        $sign = "Scorpio";
        return $sign;
    }
    elseif (($month == 11 && $day > 22) || ($month == 12 && $day < 24)){
        echo"You are a Sagittarius". "<br>";
        $sign = "Sagittarius";
        return $sign;
    }
    elseif (($month == 12 && $day > 22) || ($month == 1 && $day < 24)){
        echo"You are a Capricorn". "<br>";
        $sign = "Capricorn";
        return $sign;
    }
    elseif (($month == 1 && $day > 22) || ($month == 2 && $day < 24)){
        echo"You are an Aquarius". "<br>";
        $sign = "Aquarius";
        return $sign;
    }
    elseif (($month == 2 && $day > 19) || ($month == 3 && $day < 21)){
        echo"You are a Pisces". "<br>";
        $sign = "Pisces";
        return $sign;
    }
    else{echo "Try again";}

}


function Horor($sign1){
    if ($sign1 == "Aries"){
    echo "Your hororscope is: You don't know the future and neither do stars"."<br>";
    }
    elseif ($sign1 == "Taurus"){
        echo "Your hororscope is: Stop looking for hororscopes"."<br>";
    }
    elseif ($sign1 == "Gemini"){
        echo "Your hororscope is: These aren't accurate"."<br>";
    }
    elseif ($sign1 == "Cancer"){
        echo "Your hororscope is: Why are you looking at gas in space?"."<br>";
    }
    elseif ($sign1 == "Leo"){
        echo "Your hororscope is: Go make your own future."."<br>";
    }
    elseif ($sign1 == "Virgo"){
        echo "Your hororscope is: Practice the concept of common sense."."<br>";
    }
    elseif ($sign1 == "Libra"){
        echo "Your hororscope is: Eat some food. It's good for you."."<br>";
    }
    elseif ($sign1 == "Scorpio"){
        echo "Your hororscope is: Drink some water."."<br>";
    }
    elseif ($sign1 == "Sagittarius"){
        echo "Your hororscope is: Get some sleep."."<br>";
    }
    elseif ($sign1 == "Aquarius"){
        echo "Your hororscope is: Go make your own future."."<br>";
    }
    elseif ($sign1 == "Capricorn"){
        echo "Your hororscope is: Stop procrastinating."."<br>";
    }
    elseif ($sign1 == "Pisces"){
        echo "Your hororscope is: You don't have one lol."."<br>";
    }
}
Horor(Astro(3, 25));
Horor(Astro(1, 7));
Horor(Astro(2,25));
?>