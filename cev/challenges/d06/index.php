<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisor</title>
</head>
<body>
    <h1>Divisor</h1>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?php echo "$d1"?>">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?php echo "$d2"?>">
            <input type="submit" value="Dividir">
        </form>
    </main>
    <?php 
        $d1 = $_REQUEST["d1"] ?? 1;
        $d2 = $_REQUEST["d2"] ?? 1;
        $dd = $d1 / $d2;
        $r = $d1 % $d2;

    ?>
    <section>
        <?php echo "O resultado de $d1 dividido por $d2 é: $dd com resto $r"?>
    </section>
</body>
</html>