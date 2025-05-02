<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de raízes</title>
</head>
<body>
    <main>
        <h1>Raiz quadrada e cúbica</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="n">Digite um número</label>
        <input type="number" name="n" id="n" value="<?php echo "$n"?>">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
    $n = $_REQUEST["n"] ?? 0;
    $rq = $n ** (1/2);
    $rc = $n ** (1/3);
    ?>
    <section>
        <?php 
            echo "<p>A raíz quadrada de $n é igual a: $rq</p>";
            echo "<p>A raíz cúbica de $n é igual a: $rc</p>";
        ?>
    </section>
</body>
</html>