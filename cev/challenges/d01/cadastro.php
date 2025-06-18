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
            $num = $_REQUEST["num"] ?? 0;
            $an = $num - 1;
            $su = $num + 1;
            echo "O antecessor de $num é $an e seu sucessor é $su!";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>