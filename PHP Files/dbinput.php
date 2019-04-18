<?PHP
function OpenC(){

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$db = "class";

$conn = new mysqli ($dbhost, $dbuser, $dbpassword, $db)
or die("Connection Failed: %s\n". $conn->error);
return $conn;
}

function CloseCon($conn){
    $conn -> close();
}

$sql 'INSERT INTO FormTable (Name,Email,Comment) VALUES ($name,$email,$comment)'; //Query string

$retval = mysql_query ($sql,$conn);


if (! $retval){
    die ("Could not get data: " . mysql_error());
}
CloseConn($conn);
?>