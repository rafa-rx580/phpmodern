<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        $val = $_REQUEST['val'] ?? 0;
        $rj = $_REQUEST['rj'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="val"><p>Digite um valor (R$)</p>
            </label>

             <input type="number" name="val" id="val" min="0" step="0.01" value="<?php echo "$val"?>">

            <input type="submit" value="Reajustar">

            <label for="rj">Qual o percentual de reajuste? <strong><span id="p">?</span>%</strong>
            </label>

             <input type="range" name="rj" id="rj" min="0" max="100" step="1" oninput="mudaValor()">
        </form>
    </main>
    <?php 
        $aum = $val * $rj / 100;
        $fval = $val + $aum; 
    ?>
    <section>
        <?php 
            echo "O valor de $val após um reajuste de $rj% terá o valor de $fval";
        ?>
    </section>
    <script>
        mudaValor();
        function mudaValor(){
            p.innerText = rj.value;
        }
    </script>
</body>
</html>