<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão</title>
</head>
<body>
    <?php 
     $dvd = $_REQUEST['d1'] ?? 1;
     $dvs = $_REQUEST['d2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?php echo "$dvd"?>" min="0">
            <label for="d2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?php echo "$dvs"?>" min="1">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php 
            $q = intdiv($dvd, $dvs);
            $r = $dvd % $dvs; 
        ?>
        <table class="divisao">
            <tr>
                <td><?php echo "$dvd"?></td>
                <td><?php echo "$dvs"?></td>
            </tr>
            <tr>
                <td><?php echo "$r"?></td>
                <td><?php echo "$q"?></td>
            </tr>
        </table>
    </section>
</body>
</html>