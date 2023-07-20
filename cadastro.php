<!DOCTYPE html>
<html>
<head>
  <title>Confirmação de Cadastro</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    
    h1 {
      color: #333;
      margin-bottom: 20px;
    }
    
    .success-message {
      color: #28a745;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .btn {
      text-align: center;
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }
    
    .btn:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body> <!-- Caixa de confirmação com a imagem -->
  <div class="container">
    <h1>Confirmação de Cadastro</h1>
    <p><img src="img/sucesso.png"></p>

<?php
include ("conexao.php");
/* Orientação a Objeto do BD*/
$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$cpf=$_POST['cpf'];
/* INSERIR DADOS NO BD*/
$sql="INSERT INTO  usuario 
(nome, sobrenome, bairro, cidade, estado, email, senha, cpf)
 VALUES ('$nome', '$sobrenome', '$bairro',
  '$cidade', '$estado', '$email', '$senha', '$cpf')";
  if(mysqli_query($mysqli, $sql)){
    echo " Usuario cadastrado com sucesso!!!";
  }
  else{
    echo "Erro" .mysqli_connect_error($mysqli);
  }
  mysqli_close($mysqli);
  ?> <br><br><br><br>
  <!--LINK DE RETORNO -->
  <a href="index.php" class="btn">Clique aqui e continue navegando pelo nosso catalogo</a>
  </div>
  