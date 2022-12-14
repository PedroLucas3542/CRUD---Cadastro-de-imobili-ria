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

$sql="INSERT INTO cadastro (id, nome, email, desejo) VALUES (id, '$_POST[nome]','$_POST[email]','$_POST[desejo]')";


if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}

mysqli_close($conn);

echo "<h1>Muito Obrigado! Entraremos em contato pelo seu email...</h1><br>
        <a href='index.php'>Voltar ao site!</a>"
?>