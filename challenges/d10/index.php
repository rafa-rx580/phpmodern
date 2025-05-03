<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cálculo de idade</title>
</head>
<body>
    <main>
        <h1>Cálculo de idades</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="iy">Quando você nasceu?</label>
            <input type="number" name="iy" id="iy" placeholder="2000" required>
            <label for="iw">Ano desejado</label>
            <input type="number" name="iw" id="iw" placeholder="2050" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
    $iy = $_REQUEST["iy"] ?? 2000;
    $iw = $_REQUEST["iw"] ?? 2050;
    $r = $iw - $iy;
    ?>
    <section>
        <?php 
        echo "A idade que você terá em $iw será de $r anos!";
        ?>
    </section>
</body>
</html>