<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Soma dos números</title>
</head>
<body>
<!--Mostrar o valor da variável para que os valores não sumam sozinhos-->
    <?php 
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
<!--Formulário principal onde obteremos os dados-->
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1: </label>
            <input type="number" name="v1" id="v1" value="<?php echo "$valor1" ?>">
            <label for="v2">Valor 2: </label>
            <input type="number" name="v2" id="v2" value="<?php echo "$valor2" ?>">
            <input type="submit" value="Somar">
        </form>
<!--Resultado da soma-->
        <section>
            <?php
                $soma = $valor1 + $valor2;
                echo "<p>A soma entre os valores $valor1 e $valor2 é igual a: <strong>$soma</strong></p>";
            ?>
        </section>
    </main>
</body>
</html>