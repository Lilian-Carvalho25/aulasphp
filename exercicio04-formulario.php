<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulação de cadastro</title>
</head>

<body>
    <h1>Por favor, digite seus dados</h1>
    <hr>

    <form action="exercicio04-dados.php" method="post">
        <p>
            <label for="nome">Nome do produto:</label>
            <input required type="text" name="nome" id="nome">
        </p>

        <?php
        const FABRICANTE = ["", "Dell", "Acer", "Samsung", "Asus"];
        ?>

    <label for="fabricante">Fabricante</label>
        <select name="fabricante">
            <?php
            for ($f = 0; $f < count(FABRICANTE); $f++) {
            ?>
            
                <option><?= FABRICANTE[$f] ?></option>
            <?php
            }
            ?>
        </select>



        <p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="5"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
</body>

</html>