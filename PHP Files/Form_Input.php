        <html>
            <head>
                <style>
                    .error {color: #FF0000;}
                </style>
            </head>
            <body>
        <?php
        include "SQL.PHP";
        //define variables
        $nameErr = $emailErr = $schoolErr = $degreeErr = "";
        $name = $email = $school = $degree = "";
        $comment = "";
        $dogcat = "";
        $Fname = "";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){


            if (empty($_POST["name"])){
                $nameErr = "A name is required";
            }
            else {$name = test_input($_POST["name"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $name)) //searches name for the pattern, returns false otherwise
            {
                $nameErr = "Name may only contain letters and spaces";
                $name = "";
            }
            }
            if (empty($_POST["school"])){
                $schoolErr = "A school is required";
            }
            else {$school = test_input($_POST["school"]);

            if (!preg_match("/^[a-zA-Z ]*$/", $school)){
                $schoolErr = "School can only contain letters and spaces";
                $school = "";
            }
            }
            if (empty($_POST["degree"])){
                $degreeErr = "A Degree is required";
            }
            else {$degree = test_input($_POST["degree"]);

            if (!preg_match("/^[a-zA-Z ]{3,25}$/", $degree)){
                $degreeErr = "Degree can only contain letters and space and has to be at least 3 characters long";
                $degree = "";
            }
            }
            if (empty($_POST["email"])){
                $emailErr = "An email is required";
            }
            else {$email = test_input($_POST["email"]);

            if (!filter_var($email,FILTER_VALIDATE_EMAIL)) //searches email for the pattern, returns false otherwise
            {
                $emailErr = "Invalid Email";
                $email = "";
            }
        }
        
        if (empty($_POST["comment"])){
            $comment = "";
        }
        else {$comment = test_input($_POST["comment"]);
        }
        
    }
        function test_input($data)
            {
                $data = trim($data); //removes spaces, tags, newlines
                $data = stripslashes($data); //removes backslashes
                $data = htmlspecialchars($data); //removes html tags
                return $data;
            }
        ?>
        </body>
<form method="post" action="">
Name: <input type = "text" name = "name" value = "<?php echo $name?>">
<span class = "error">* <?php echo $nameErr;?></span>
<br>
Email: <input type = "text" name = "email" value = "<?php echo $email?>">
<span class = "error">* <?php echo $emailErr;?></span>
<br>
School Name: <input type = "text" name = "school" value = "<?php echo $school?>">
<span class = "error">* <?php echo $schoolErr;?></span>
<br>
Degree: <input type = "text" name = "degree" value = "<?php echo $degree?>">
<span class = "error">* <?php echo $degreeErr;?></span>
<br>
Dogs or cats? <input type = "radio" name="dogcat"<?php if (isset($dogcat) && $dogcat=="dog") echo "checked";?> value = "dogs"> dogs
<input type = "radio" name = "dogcat" <?php if (isset($dogcat) && $dogcat=="cat") echo "checked";?> value = "cats"> cats
<input type = "radio" name = "dogcat" <?php if (isset($dogcat) && $dogcat=="No answer") echo "checked";?> value = "No answer"> No Answer
<br>
Comment: <textarea name = "comment" rows = "4" cols = "25">
<?php echo $comment;?></textarea>
<br><br>
<input type = "submit" name = "submit" value="submit">


</form>




<?php
echo "<h2>Your input:</h2>";
echo $name. "<br>";
echo $email. "<br>";
echo $school. "<br>";
echo $degree. "<br>";
echo $dogcat. "<br>";
echo $comment."<br>";
?>
<form  method = "post" action = "">
    Find By First Name: <input type = "text" name = "Fname" value = "<?php echo $Fname?>">
    
    <input type = "submit" name = "Find" value = "Find">
    

</form>

<?php
if(isset($_POST['submit']))
{
    //opens connection to the database
    $conn = OpenC();

$sql = "INSERT INTO formtable (Name,Email,Comment) VALUES ('$name','$email','$comment')";
$result = $conn->query($sql);

if (!$result)
{
    die('Error: '.mysqli_error($conn));

}
else 
{
    echo "New record added". "<br>";
}



CloseCon($conn);
}
if(isset($_POST['Find']))
{
    $Fname = test_input($_POST["Fname"]);
    //opens connection to the database
    $conn = OpenC();


$sql = "SELECT * FROM formtable WHERE Name = '$Fname'";
$result = $conn->query($sql);

if (!$result)
{
    die('Error: '.mysqli_error($conn));

}
else 
{
    echo "Person found"."<br>";

    if ($result -> num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        echo "Name: " . $row["Name"]. " - Email: " . $row["Email"] . "<br>";
    }
}
}



CloseCon($conn);
}

?>
<a href = "table_readout.php"> Table Readout </a>
</html>