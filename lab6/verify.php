<DOCTYPE html>
	<html>
<?php
$email = $_POST["email"];
$password= $_POST["password"];




$servername = "localhost";
$username = "root";

$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql= "select * from info where email='$email' and password='$password'";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
echo " log in  done";
    }
     else {
    echo "0 results";
}
$conn->close();

?>

</html>