<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando</title>
</head>
<body>
    <main>
        <h1>Analisador de números reais</h1>
        <?php
        $num = $_POST["num"] ?? 0;
        echo "<p>Analisando o número <strong>" . number_format($num, 3) . "</strong></p>";

        $i = (int) $num;
        $f = $num - $i;

        echo "A parte inteira do número " .number_format($num, 3). " é $i, enquanto a parte fracionária é $f";
        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>