<?php
include "conexao.php";

$sql = "SELECT codigo_produto, Nome, preco, imagem 
        FROM produtos 
        ORDER BY codigo_produto";

$resultado = mysqli_query($mysqli, $sql);
$numLinhas = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_item2.css">
    <script src="https://kit.fontawesome.com/94642d9482.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    
    <title>Carrinho de compras</title>
    
</head>
<body>
<header>
    <!-- AREA TOP SUPERIOR DO INDEX -->
    <div class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="item_2">Iphone 7</a></li>
            <li><a href="descricao_item2.html">Iphone 14</a></li>
            <li><a href="cadastro.html">Cadastrar</a></li>
            <li><a href="login.php">Entrar</a></li>
        </ul>
    </div>
</header>
<!-- FRETE -->
<main>
    <div class="top-nav1">
        <h2>Equipe Front</h1>
        <p>Bem vindos</p>
        <ul>
            <li><i class="fa-regular fa-user"></i></li>
            <li><i class="fa-regular fa-heart"></i></li>
            <li>
                <a href="compra.php">
                    <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                </a>
            </li>
        </ul>
    </div>
    <!-- AREA DE PESQUISA -->
    <div class="pesquisa">
        <div class="botao">  
            <input type="search" id="busca" name="q" placeholder="O que você está procurando?">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
    <div class="celular">
        <p>
            <i class="fa-solid fa-truck"></i>
            <b>Frete grátis</b> para todo Brasil em compras acima de R$1000
            <i class="fa-solid fa-truck"></i>
        </p>
    </div>  

    <h1>Carrinho</h1>
    <?php
/* somente um produto*/
$id = 1;

/*Consulta SQL para pegar so unico ID especificado*/
$sql = "SELECT codigo_produto, Nome, preco, imagem 
        FROM produtos 
        WHERE codigo_produto = $id";

$resultado = mysqli_query($mysqli, $sql);
$numLinhas = mysqli_num_rows($resultado);

if ($numLinhas > 0) {
    $row = mysqli_fetch_assoc($resultado);
    ?>
    <!-- Codigo do index para exibir a unica ID do produto especifico -->
    <section class="conteudo" id="grid-conteudo">
      <div class="grid">
          <table>
            <tr>
              <td>
                        <img src="img/<?php echo $row['imagem']; ?>">
                        <h1><?php echo $row['Nome']; ?></h1>
                        <h1><?php echo $row['preco']; ?></h1>
                        <h1><?php echo $row['codigo_produto']; ?></h1>
                </td>
            </tr>
          </table>
        </div>
    </section>
    <?php
} else {
    echo "Nenhum resultado encontrado para o ID especificado.";
}
?>
<!-- Informação de frete, botao, e retorno ao index -->
    <h4>Total a pagar: valor</h4>
    <h2>Seus produtos desejados</h2>
    <p>Os produtos ficarão aqui após a implementação do banco de dados.</p><br><br>
    <div id="e2">
    </p>
      <a  href="index.php" class="btn" target="_blank">CONTINUAR NAVEGANDO</a><br><br>
    </p>
    </div>
    <h3>Cálculo do frete</h3>
    <h5>Informe o CEP</h5>
    <input id="s2" type="text">
    <h5>Cupom de desconto</h5>
    <input id="a2" type="text"><br><br><br><br>
  
    
    <a href="pagmento.html" class="btn">COMPRE AGORA MESMO</a>
</div>
</main>
</body>
</html>
<!---------------------------- RODA PE---------------------- -->
<footer class="footer">
    <p>Outras formas de comprar: encontre uma Apple Store ou revendedor Apple na sua região. Ou ligue para 0800-761-0867</p>
    <p>Rua Leopoldo Couto de Magalhães Jr.,700, 7º andar, Itaim Bibi. São Paulo, SP. CEP:04542-000.</p>
    <hr>
    <p>Brasil</p> 
    <p>Copyright @ 2022 Apple Inc. Todos os direitos reservados.</p>
    <p>Os Serviços de Mídia da Apple são fornecidos pela Apple Services LATAM LLC.</p>
</footer>