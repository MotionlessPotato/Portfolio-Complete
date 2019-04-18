<?php
include "SQL.PHP";


    //opens connection to the database
    $conn = OpenC();

$sql = "CREATE TABLE FormTable (Name varchar(30), Email varchar(60), Comment varchar(50));";
$result = $conn->query($sql);

if (!$result)
{
    die('Error: '.mysqli_error($conn));

}
else 
{
    echo "Table added";
}
CloseCon($conn);

?>