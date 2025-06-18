<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contador de tempo</title>
</head>
<body>
    <?php
    // DIVISÃO E RESTO DE DIVISÃO NÃO SERVE SÓ PARA PAR OU IMPAR. sÃO BEM ÚTEIS. 
    $s = $_REQUEST['s'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <h1>Contador de tempo</h1>
            <label for="s">Quantos segundos?</label> <input type="number" name="s" id="s" value="<?php echo "$s"?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
        // 1m = 60s
        // 1h = 3600s
        // 1d = 86400s
        // 1w = 604800s
        $w = intdiv($s, 604800);
        $d = intdiv($s % 604800, 86400);
        $h = intdiv($s % 86400, 3600);
        $m = intdiv($s % 3600, 60);
        $ss = ($s %3600) % 60; 
        ?>
        <h2>Resultado do cálculo</h2>
        <strong>
            <p><?php echo "$s"?> segundos correspondem a: </p>
        </strong>
        <p><strong><?php echo "$ss"?></strong> segundos,</p>
        <p><strong><?php echo "$m"?></strong> minutos,</p>
        <p><strong><?php echo "$h"?></strong> horas,</p>
        <p><strong><?php echo "$d"?></strong> dias,</p>
        <p><strong><?php echo "$w"?></strong> semanas.</p>
    </section>
</body>
</html>