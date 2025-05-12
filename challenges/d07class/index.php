<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário mínimo</title>
</head>
<body>
    <?php  
        $min = 1380.60;
        $sal = $_REQUEST['sal'] ?? 0;
    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="sal">Quantia de dinheiro: R$</label> <input type="number" name="sal" id="sal" value="<?php echo $sal?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$ 1380,60</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $qnt = intdiv($sal, $min);
            $r = $sal % $min;
            echo "Essa quantia é igual à $qnt salários mínimos e R\$$r!"
        ?>
    </section>
</body>
</html>