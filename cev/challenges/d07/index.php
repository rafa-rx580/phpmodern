<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário Mínimo</title>
</head>
<body>
    <main>
        <h1>Salários mínimos</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="q">Salário(R$)</label>
            <input type="number" name="q" id="q">
            <input type="submit" value="Calcular">
            <p>Considerando o salário mínimo de <strong>R$1,520</strong>.</p>
        </form>
    </main>
    <?php 
        $q = $_REQUEST["q"] ?? 0;
        $d = intval($q / 1520);
        $r = $q - ($d * 1520);
    ?>
    <section>
        <?php 
            echo "Essa quantia de $q equivalem a $d salários mínimos e R\$$r"
        ?>
    </section>
</body>
</html>