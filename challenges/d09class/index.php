<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritméticas</title>
</head>
<body>
    <?php 
    $v1 = $_REQUEST['v1'] ?? 0;
    $p1 = $_REQUEST['p1'] ?? 1;
    $v2 = $_REQUEST['v2'] ?? 0;
    $p2 = $_REQUEST['p2'] ?? 1;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" step="0.1" value="<?php echo "$v1"?>">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1" step="0.1" min="1" value="<?php echo "$p1"?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" step="0.1" value="<?php echo "$v2"?>">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2" step="0.1" min="1" value="<?php echo "$p2"?>">
            <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h2>Resultado das médias</h2>
        <?php 
            $ma = ($v1 + $v2) / 2;
            $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
            echo "<p>A média aritmética de $v1 e $v2 é " . number_format($ma, 2) . "!</p>";
            echo "<p>A média ponderada dos valores acima é ". number_format($mp, 2) ."!</p>";
        ?>
    </section>
</body>
</html>