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
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/94642d9482.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <title>Iphone - inicio</title>
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
<!-- FRETE CARINHO DE COMPRAS -->
<main>
    <div class="top-nav1">
        <h2>Equipe Front</h2>
        <p>Bem vindos</p>
        <!-- Area de menu lateral direito-->
        <ul>
            <li><i class="fa-regular fa-user"></i></li>
            <a href="compra.php">
                    <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                </a>
            <li><i class="fa-regular fa-heart"></i></li>
        </ul>
    </div>
    <!-- AREA DE PESQUISA -->
    <div class="pesquisa">
        <div class="botao">  
            <input type="search" id="busca" name="q" placeholder="O que você está procurando?"><i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
    <!--FRETE-->
    <div class="celular">
        <p><i class="fa-solid fa-truck"></i> <b>Frete grátis</b> para todo Brasil em compras acima de R$1000 <i class="fa-solid fa-truck"></i></p>
    </div>
    <!-- CONTEUDO DO BANCO DE DADOS -->
    <section class="conteudo" id="grid-conteudo">
        <div class="grid">
            <table>
                <?php
                $coluna = 1;
                $produtosExibidos = 0;

                while ($produtosExibidos < $numLinhas) {
                    echo '<tr>';

                    while (($coluna <= 3) && ($produto = mysqli_fetch_assoc($resultado))) {
                        echo '<td>';
                        echo "<img src=\"img/{$produto['imagem']}\">";
                        echo "<h1>{$produto['Nome']}</h1>";  
                        echo "<h1>{$produto['preco']}</h1>";  
                        echo "<h1>{$produto['codigo_produto']}</h1>";  
                        echo '</td>';

                        $coluna++;
                        $produtosExibidos++;
                    }

                    echo '</tr>';
                    $coluna = 1;
                }
                ?>
            </table>
        </div>  
    </section>
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