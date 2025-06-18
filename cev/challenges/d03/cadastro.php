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
            $real = $_REQUEST["currency"] ?? 0;
            $dol = $real / 5.81;

            //Formatação de moedas com internacionalização;
            $default = numfmt_create("pt-BR", NumberFormatter :: CURRENCY);
            

            echo "Seus " . numfmt_format_currency($default, $real, "BRL") . " equivalem a " . numfmt_format_currency($default, $dol, "USD") . ".";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>