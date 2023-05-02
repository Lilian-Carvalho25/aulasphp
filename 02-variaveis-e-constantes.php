<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <h1>Variáveis e constantes</h1>
    <hr>

    <h2>Variáveis</h2>

<?php
// Variáveis
$curso = "Programador web";
$ano = 2023;
$preco = "1278.75";
$area = "Back-end";

// Saída de dados
echo "<h2>Exemplos de saída usando variáveis</h2>";
echo '<p>$curso</p>'; //trata como texto
echo "<p>$curso</p>"; //interpolação

/* Ao usar variáveis dentro de strings/textos, são necessárias as aspas duplas "" para que o recurso seja interpretado. */

// Saída usando concatenação
echo "<p><i>".$curso."</i></p>";
?>

<!-- Saída ABREVEADA/SIMPLIFICADA usando "shorthand tags" do PHP -->
<h2>Saída usando versão simplificada do PHP</h2>
<!-- Frase: estamos em 2023 estudando Back-End -->

<!-- Forma abreveada (mais simples e comum de encontrar) -->
<p>Estamos em <?=$ano?> estudando <?=$area?> </p>

<!-- Usando php sintaxe tradicional (mais verbosa e suscetível a erros) -->
<?php
echo "<p> Estamos em $ano estudando $area</p>";
?>

<h2>Constantes</h2>
<?php
// Sintaxe tradicional
define("Autor", "Lilian Carvalho");
define("Juros", 10);

// Sintaxe mais recente
const EMPRESA = "ABC Tecnologia";
?>

<!-- Para constantes não é necessário o $ -->
<p>Autor do site: <?=Autor?></p>
<p>Taxa de juros: <?=Juros?>% em <?=$ano?></p>
<p>Prestador de serviços: <?=EMPRESA?></p>
</body>
</html>