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
    include_once 'edicao.php';


	@$update="UPDATE from cadastro set nome='$_POST[nome]', email='$_POST[email]', desejo='$_POST[nome]' where id=(select MAX(id) from cadastro)";
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: edicao.php");
	}
	
?>