<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de porcentagem</title>
</head>
<body>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="val">Escreva o valor desejado: (R$)</label>
            <input type="number" name="val" id="val" required>
            <label for="pct">Escreva a porcentagem do reajuste: </label>
            <input type="number" name="pct" id="pct" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $val = $_REQUEST["val"] ?? 0;
        $pct = $_REQUEST["pct"] ?? 0;
        $p = ($val / 100) * $pct;
        $r = $val + $p;
    ?>
    <section>
        <?php 
            echo "O valor de R\$$val após o reajuste de $pct% será de R\$$r!";
        ?>
    </section>
</body>
</html>