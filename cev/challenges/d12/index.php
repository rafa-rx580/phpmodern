<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<body>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="ts">Total de segundos: </label>
            <input type="number" name="ts" id="ts">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php
    $ts = $_REQUEST["ts"] ?? 0; 
    $sm = intval($ts / 604800);
    $d = intval($ts / 86400);
    $h = intval($ts / 3600);
    $m = intval($ts / 60);
    $s = 0; 
    ?>
    <section>
        <?php
        echo "O total de <strong>$ts</strong> segundos equivale à:"; 
        echo "<p>$sm Semanas</p>";
        echo "<p>$d Dias</p>";
        echo "<p>$h Horas</p>";
        echo "<p>$m Minutos</p>";
        echo "<p>$s Segundos</p>";
        ?>
    </section>
</body>
</html>