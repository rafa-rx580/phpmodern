<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício com raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST['num'] ?? 1;
    ?>
    <h1 style="color: white">Exercício com raízes</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
        <label for="num" style="color: white;">Digite um número:</label> <input type="number" name="num" id="num" value="<?php echo "$num"?>">
        <input type="submit" value="Calcular raízes">
    </form>
    <section>
        <h2>Resultado</h2>
        <?php 
            $rq = $num ** (1/2);
            $rc = $num ** (1/3);
            echo "Analisando, percebe-se que a <strong>raíz quadrada</strong> do número <strong>" . number_format($num) . "</strong> é <strong>" . number_format($rq, 3) . "</strong>, enquanto sua <strong>raíz cúbica</strong> é igual a <strong>" . number_format($rc, 3) . "</strong>!";
        ?>
    </section>
</body>
</html>