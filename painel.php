<?php

include ('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
    <title>Painel</title>
</head>
<body>
   <h1> Bem vindo ao painel, <?php echo $_SESSION ['nome']; ?> </h1>
<p>
<p>
        <a href="index.php">Home</a>
    </p>
    <img src="img/imagemLogin.jpg" 
</p>
    <p>
        <a href="login.php">Sair</a>
    </p>
</body>
</html>