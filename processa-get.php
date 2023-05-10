<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Processamento usando o método GET</h1>
    <hr>

<?php 
// Array Superglobal $_GET[]
/* É um array que já existe na linguagem, responsável por armazenar dados transmitidos via método GET. Cada dado, fica em uma chave associativa dentro do array. Esta chave é o nome do campo do formulário. */


// Capturando individualmente os dados dos campos do formulário
$nome = $_GET['nome'];
$email = $_GET['email'];
$assunto = $_GET['assunto'];
$mensagem = $_GET['mensagem'];
?>

<h2>Dados recebidos</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Email: <?=$email?></li>
    <li>Assunto: <?=$assunto?></li>
    <li>Mensagem: <?=$mensagem?></li>
</ul>
</body>
</html>