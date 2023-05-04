<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Segundo exercicio - simulação de dados</h1>
    <hr>

<?php
$dados = [
    "nomeDeUsuario" => "Lilian Carvalho",
    "senha" => "123abc",
    "idade" => 18,
    "cidade" => "São Paulo"
];
?>

<h2>Dados do usuário</h2>
<ol>
    <li>Nome: <?=$dados["nomeDeUsuario"]?></li>
    <li>Idade: <?=$dados["idade"]?></li>
    <li>Cidade: <?=$dados["cidade"]?></li>
</ol>

</body>
</html>