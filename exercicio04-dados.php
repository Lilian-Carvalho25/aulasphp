<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Processamento de dados</h1>
    <hr>


<?php 

if( empty($_POST["nome"]) || empty($_POST["preco"]) ) {
?>

<p style="color: red;">Por favor, informe o nome do produto e o preço.</p>

<?php
} else {

$nome = $_POST['nome'];
$fabricante = $_POST['fabricante'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
?>

<h2>Dados</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Preço: <?=$preco?></li>
    <li>Fabricante: <?=$fabricante?></li>
</ul> 

<?php if( !empty($descricao) ){ ?>
    <li>Descrição: <?=$descricao?></li>
<?php } ?>
</ul>

<?php
} 
?>


</body>
</html>