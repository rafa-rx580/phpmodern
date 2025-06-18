<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $min = $_REQUEST["min"] ?? 0;
            $max = $_REQUEST["max"] ?? 0;
            $num = mt_rand($min,$max);
            echo "Um número aleatório gerado entre $min e $max foi <strong>$num</strong>"
            
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>