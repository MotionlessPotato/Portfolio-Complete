<?PHP
// check connection
include 'SQL.PHP';
$conn = OpenC();
echo "Connection Successful"."<br>";
$sql = "select Model, Price FROM camera";
$result = $conn -> query($sql);

if($result -> num_rows > 0 ){
    //output data of each row
    
    while ($row = $result -> fetch_assoc()){
        echo "Model: ". $row["Model"]. "- Price: ". $row["Price"]."<br>";
    }
}
else{
    echo"No results found";
}
 CloseCon($conn);
 
 
 ?>