<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
    <style>
        .nota{
            height: 100px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $q = $_REQUEST['q'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <h1>Caixa eletrônico digital</h1>
            <label for="q">Quantidade: (R$)</label> <input type="number" name="q" id="q" step="5" value="<?php echo "$q"?>" required>
            <p style="font-size: 0.7em;">Notas disponíveis: R$5 R$10 R$50 R$100.</p> <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 
            $resto = $q;
            $t100 = floor($resto / 100);
            $resto %= 100;

            $t50 = floor($resto / 50);
            $resto %= 50;

            $t10 = floor($resto / 10);
            $resto %= 10;

            $t5 = floor($resto / 5);

        ?>
        <h2>Resultado</h2>
        <p>Saque de <strong><?php echo "R\$$q.00"?></strong></p>
        <ul>
            <li><img src="images/100-reais.jpg" alt="Nota de 100" class="nota"> x <?php echo "$t100"?></li>
            <li><img src="images/50-reais.jpg" alt="Nota de 50" class="nota"> x <?php echo "$t50"?></li>
            <li><img src="images/10-reais.jpg" alt="Nota de 10" class="nota"> x <?php echo "$t10"?></li>
            <li><img src="images/5-reais.jpg" alt="Nota de 5" class="nota"> x <?php echo "$t5"?></li>
        </ul>
    </section>
</body>
</html>