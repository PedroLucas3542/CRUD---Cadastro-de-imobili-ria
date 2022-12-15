<?php

$servername = "localhost";
$database = "imobiliaria";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE from cadastro where id=(select MAX(id) from cadastro)";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
