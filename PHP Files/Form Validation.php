<?php
//define variables
$nameErr = $emailErr = "";
$name = $email = "";

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($_POST["name"])){
        $nameErr = "A name is required";
    }
    else {$name = test_imput($_POST["name"]);
    if (!preg_match("/^[a-zA-z]*?$/", $name)) //searches name for the pattern, returns false otherwise
    {
        $nameErr = "Name may only contain letters and spaces";
    }
    }
    if (empty($_POST["email"])){
        $emailErr = "An email is required";
    }
    else {$email = test_imput($_POST["email"]);
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) //searches email for the pattern, returns false otherwise
    {
        $emailErr = "Email may only contain letters and spaces";
    }
    }
}
function test_imput($data)
    {
        $data = trim($data); //removes spaces, tags, newlines
        $data = stripslashes($data); //removes backslashes
        $data = htmlspecialchars($data); //removes html tags
        return $data;
    }