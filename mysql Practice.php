//object oriented
<?php
$servername = "localhost:3306";
$username = "username";
$password = "password";
$db = "mydb";
//creating connection
$conn = new mysqli($servername, $username, $password, $db);

//checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully";
$conn->close();
?>

//procedure oriented
<?php
$servername = "localhost:3306";
$username = "username";
$password = "password";
$db = "mydb";
//creating connection
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection Established";
mysqli_close($conn);
?>