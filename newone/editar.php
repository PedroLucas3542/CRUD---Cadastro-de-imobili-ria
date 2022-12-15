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

	@$id = $_GET['id'];
	$nome  = isset($_POST['nome'])?$_POST['nome']:"";
	$email   = isset($_POST['email'])?$_POST['email']:"";
	$desejo = isset($_POST['desejo'])?$_POST['desejo']:"";

	@$sql="INSERT INTO cadastro (id, nome, email, desejo) VALUES (id, '$_POST[nome]','$_POST[email]','$_POST[desejo]')";
    $delete="DELETE FROM aluno WHERE id=(select MAX(id) FROM aluno);";
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: index.php");
	}
	
?>