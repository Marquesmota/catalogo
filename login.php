<?php 
include ('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "Prencha seu email";
    } else if (strlen($_POST['senha']) == 0){
        echo "Prencha sua senha";
    } else {

     $email = $mysqli->real_escape_string($_POST['email']);
     $senha = $mysqli->real_escape_string($_POST['senha']);


      $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na conexão do SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if ($quantidade == 1){
       
        $usuario = $sql_query ->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();

        }

        $_SESSION['id'] = $usuario ['id'];
        $_SESSION['nome'] = $usuario ['nome'];

        header ("Location: painel.php");
      }else{
        echo "Falha ao logar!  Email ou senha estão incorretos";

      }
    }
}
?>
<!-- Busca de requerimento do BD para logar-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja bem vindo ao login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body> <!--FORMULARIO-->
    <div class="page">
        <form method="POST" class="formLogin">
            <h1>Bem vindo ao login </h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name = "email" placeholder="Digite seu e-mail" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" name = "senha" placeholder="Digite sua senha" />
            <a href="cadastro.html">Não possui cadastro ? Clique aqui e faça o seu cadastro!</a>
            <input type="submit" value="Acessar" class="btn" /> <br><br>
            <a href="index.php">Caso não queira se cadastrar, continue navegando</a>
         
        </form>
    </div>
    
</body>
</html>