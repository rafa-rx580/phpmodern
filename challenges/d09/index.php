<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritmétricas</title>
    <main>
        <h1>Médias aritmétricas</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1">
            <label for="p1">Peso 1</label>
            <input type="number" name="p1" id="p1">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2">
            <label for="p2">Peso 2</label>
            <input type="number" name="p2" id="p2">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $v1 = $_REQUEST['v1'] ?? 0; 
        $v2 = $_REQUEST['v2'] ?? 0;
        $p1 = $_REQUEST['p1'] ?? 1;
        $p2 = $_REQUEST['p2'] ?? 1;
        $ms = ($v1 + $v2) / 2;
        $mp = $v1 * $p1 + $v2 * $p2 / ($p1 + $p2)
    ?>
    <section>
        <?php echo "<p>A média simples é igual a $ms</p>";
        echo "<p>A média ponderada é igual a $mp</p>"
        ?>
    </section>
</head>
<body>
    
</body>
</html>