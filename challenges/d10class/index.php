<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Máquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual = date("Y");
    $ai = $_REQUEST['ai'] ?? 2000;
    $ad = $_REQUEST['ad'] ?? $atual;
    
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="ai">Qual ano de início?</label> <input type="number" name="ai" id="ai" min="0" max="<?php echo "$atual"?>" value="<?php echo "$ai"?>">
            <label for="ad"><p>Qual o ano desejado? <strong>(atualmente estamos em <?php echo "$atual"?>)</strong></p></label> <input type="number" name="ad" id="ad" min="0" value="<?php echo "$ad"?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $idade = $ad - $ai;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <strong><?php echo "$ai"?></strong> vai ter <strong><?php echo "$idade"?></strong> em <strong><?php echo "$ad"?></strong></p>
    </section>
</body>
</html>