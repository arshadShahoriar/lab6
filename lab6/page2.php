<?php

session_start();
?>


<DOCTYPE html>
<html>

<?php

$name = $_SESSION["name"];
$email = $_SESSION["email"];
$gender = $_SESSION["gender"];
$password = $_SESSION["password"];

$image=$_FILES['image'] ["name"];



$servername = "localhost";
$username = "root";

$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info (name, email, gender, password, image)
VALUES ('$name', '$email', '$gender','$password', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>

</html>