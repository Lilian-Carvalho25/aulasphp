<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeirio exercício</title>
</head>
<body>


<?php
const nome = "Lilian";
const curso = "Gastronomia";
$cargaHoraria = 400;
$limite = $cargaHoraria / 4;
?>

<h2>Dados</h2>
<p>O nome dela é <b><?=nome?></b>, ela está cursando <b><?=curso?></b>. Sua carga horária é de <b><?=$cargaHoraria?> horas</b> portando, o limite de faltas é <b><?=$limite?></b>.</p>
</body>
</html>