<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops com php</title>
</head>
<body>
    <h1>Loops PHP</h1>
    <hr>


 <!-- Loops tradicionais: while, for e do/while -->

<h2>While (enquanto)</h2>
<?php
$i = 1; // variável de controle

while($i <= 5){
?>
    <p>Senha Penha - PHP (i vale <?=$i?>)</p>
<?php
    $i++;
}
?>

<hr>
<h2>Do/while</h2>
<ul>
<?php
$j = 1;

do {
?>
    <li>PHP (j vale <?=$j?>)</li>
<?php
    $j++;
} while($j <= 5)
?>
</ul>


<hr>
<h2>For</h2>
<?php
$bandas = ["Pink Floyd", "Savatage", "Slayer"];
?>

<section>
    <h3>Bandas</h3>
<?php for( $k = 0; $k < count($bandas); $k++ ){ ?>
    <p><?=$bandas[$k]?></p>
<?php } ?>
</section>

<hr>
<h2>Exercício: lista de meses</h2>

<?php
const MESES = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho","Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
?>

<h3>Meses do ano</h3>
<ol>
<?php
for ($m = 0; $m < count(MESES); $m++ ){
?>
    <li><?=MESES[$m]?></li>
<?php
}
?>
</ol>

<hr>
<h2>Foreach</h2>
<!-- Foreach - para cada
as - como
-->
<?php 
/* Para cada BANDA dentro do arry BANDAS */
foreach ($bandas as $banda ) { ?>
    <p>Banda: <b><?=$banda?></b> </p>
<?php } ?>


</body>
</html>