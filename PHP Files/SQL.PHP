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
?>