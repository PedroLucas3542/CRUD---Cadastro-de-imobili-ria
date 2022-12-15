<nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="index.php">PeJu imóveis</a>
    
</nav>
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

@$sql="INSERT INTO cadastro (id, nome, email, desejo) VALUES (id, '$_POST[nome]','$_POST[email]','$_POST[desejo]')";


if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}

mysqli_close($conn);


echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
        <br><center><h1 display-6>Muito Obrigado! Entraremos em contato pelo seu email...</h1><br>
        <a href='index.php' class='btn btn-primary' tabindex='-1'>Voltar ao site</a>
        <a href='editar.php' class='btn btn-warning' tabindex='-1'>Editar cadastro</a></center><br><br>"

?>

