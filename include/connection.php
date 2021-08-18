<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="central mess system";
$connect = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>