
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
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
		@$id = $_GET['id'];
	
		$consultar = $conn->query("SELECT * from cadastro where id=(select MAX(id) from cadastro)");

		while($dados = $consultar->fetch_assoc()){
			@$nome   = $dados['nome'];
			@$email	= $dados['email'];
			@$desejo 	= $dados['desejo'];
		}
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

    				<form action="editar.php" method="post" accept-charset="utf-8" class="form-group">

    					<label for="nome">Nome:</label>
    					<input type="text" name="nome" value="<?php echo @$nome;?>" class="form-control">
    						
    					<label for="email$email">Número:</label>
    					<input type="text" name="email" value="<?php echo @$email;?>" class="form-control">

    					<label for="desejo">Desejo:</label>
    					<input type="text" name="desejo" value="<?php echo @$desejo;?>" class="form-control">

    					<br>
    					<input href="salvar.php" type="submit" name="btn" value="ALTERAR" class="btn btn-success">
    					<a href="salvar.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>