<html>

<?php
$delete = "";
include "SQL.PHP";


$conn = OpenC();
$sql = "Select * FROM FormTable;";
$result = $conn->query($sql);
if ($result -> num_rows > 0)
{
    while($row = $result->fetch_assoc()){
        echo "Name: " . $row["Name"]. " - Email: " . $row["Email"] . "<br>";
    }
}
CloseCon($conn);
?>
<br>
<form  method = "post" action = "">
    Delete By First Name: <input type = "text" name = "delete" value = "<?php echo $delete?>">
    
    <input type = "submit" name = "Delete" value = "Delete">
    

</form>
<?php


function test_input($data)
{
    $data = trim($data); //removes spaces, tags, newlines
    $data = stripslashes($data); //removes backslashes
    $data = htmlspecialchars($data); //removes html tags
    return $data;
}


if(isset($_POST['Delete']))
{
    $delete = test_input($_POST["delete"]);
    //opens connection to the database
    $conn = OpenC();

$sql = "DELETE FROM formtable WHERE Name = '$delete'";
$result = $conn->query($sql);

if (!$result)
{
    die('Error: '.mysqli_error($conn));

}
else 
{
    echo "$delete";
    echo "Row deleted"."<br>";   
}

CloseCon($conn);
}
?>


<a href = "Form_Input.php"> Form for input </a>
</html>