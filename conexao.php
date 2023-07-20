<?php
$host="localhost";
$usuario="root";
$senha="";
$dbname="cadastro_usuario";
$mysqli = new mysqli ($host, $usuario, $senha, $dbname);
if ($mysqli->error){
    die("Falha ao conectar ao banco de dados" .$mysqli->error);
}
?>

<!-- Arquivo de conexao do BD -->