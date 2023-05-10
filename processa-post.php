<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento GET</title>
</head>
<body>
    <h1>Processamento usando o método Post</h1>
    <hr>

<?php 
// Se o campo nome OU o campo email estiverem vazios
if( empty($_POST["nome"]) || empty($_POST["email"]) ) {
?>

<p style="color: red;">Você deve preencher nome e e-mail!</p>

<?php
} else {
// Array Superglobal $_POST[]
/* É um array que já existe na linguagem, responsável por armazenar dados transmitidos via método POST. Cada dado, fica em uma chave associativa dentro do array. Esta chave é o nome do campo do formulário. A maior diferença do método anterior, é que os dados não são mostrados na URL */


// Capturando individualmente os dados dos campos do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
?>

<h2>Dados recebidos</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>Email: <?=$email?></li>

<!-- "Se o assunto NÃO estiver vazio" = Se está não mostramos nada, e não está mostramos a opção escolhida 
! = Não
!true = não verdadeiro
!false = não falso
!empty = não vazio
|| = Ou
&& = E


-->
<?php if( !empty($assunto)){ ?> 
    <li>Assunto: <?=$assunto?></li>
<?php } ?>

<?php if( !empty($mensagem) ){ ?>
    <li>Mensagem: <?=$mensagem?></li>
<?php } ?>
</ul>

<?php
} 
?> <!-- Final do if/else de nome e email -->

</body>
</html>