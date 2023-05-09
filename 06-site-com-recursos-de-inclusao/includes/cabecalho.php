<?php 
//  Detectando o nome do arquivo/página aberta no momento
$pagina = basename($_SERVER['PHP_SELF']);

// Analisando qual é a página aberta e determinando o titulo
switch($pagina){
    case 'index.php': $titulo = "Página inicial"; break;
    case 'produtos.php': $titulo = "Produtos"; break;
    case 'servicos.php': $titulo = "Serviços"; break;
    default: $titulo = "Contato"; break;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site PHP - <?=$titulo?></title>
    <!-- Atenção ao caminho do CSS:
    A referência é a raíz deste projeto, ou seja, a própria pasta 06 onde as inclusões ocorrem junto com cada página. -->
    <link rel="stylesheet" href="css/estilos.css">
    
    <!-- Somente se estiver na página contato.php, carregue o CSS abaixo -->
    <?php if( $pagina == "contato.php" ){ ?>
    <link rel="stylesheet" href="css/contato.css">
    <?php } ?>
</head>
<body>
    <header>
        <h1>Site PHP</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
   