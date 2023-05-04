<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais versão 2</title>
    <style>
        .normal{
            background-color: lightgreen;
            max-width: 13%;
            padding: 3px;
            border-radius: 3px;
            color: green;
        }

        .repor{
            background-color: lightpink;
            max-width: 22%;
            padding: 3px;
            border-radius: 3px;
            color: red;
        }

        .urgente{
            background-color: yellow;
            max-width: 22%;
            padding: 3px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

    <h1>Condicionais versão 2</h1>
    <hr>

    <h2>Simples</h2>

<?php
/* Essa condicional só tem if */
$numero = 10;
if($numero >= 5){
?>
  <p><?=$numero?> é maior/igual a 5</p>
<?php
}
?> 
<!-- Separamos o que é php do html, basicamente isolamos o início do if, depois isolamos o "html", colocando o que é do php no bloquinho, e depois isolamos a chave -->


    <h2>Composta</h2>
<?php
/* Essa condicional tem if e else */
$produto = "Ultrabook";
$qtdEmEstoque = 10; // o que temos no momento
$qtdCritica = 5; // mínimio necessário
?>
<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?=$qtdEmEstoque?></h4>

<?php
if($qtdEmEstoque < $qtdCritica){
?>

    <p class="repor"> É necessário comprar/repor.</p>

<?php
    if($qtdEmEstoque == 0){
?>

    <p><span class="urgente">URGENTE!</span></p>

<?php
    }
} else {
?>

    <p class="normal">Estoque normal.</p>

<?php
}
?>

    <h2>Encadeada</h2>
<?php
/* Essa condicional tem diversas possibilidades */
/* if($produto == "Ultrabook"){
    $garantia = 3;
} elseif ($produto == "Geladeira") {
    $garantia = 5;
} elseif ($produto == "TV") {
    $garantia = 2;
} else {
    $garantia = 1;
} */

/* Mais simples que o anterior */
switch($produto){
    case "Ultrabook" : $garantia = 3; break;
    case "Geladeira" : $garantia = 5; break;
    case "TV" : $garantia = 2; break;
    default : $garantia = 1; break;
}
?>
<p>O <?=$produto?> tem garantia de <?=$garantia?> ano(s).</p>


</body>
</html>