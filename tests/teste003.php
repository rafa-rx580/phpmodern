<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php 
        #HEREDOC STRING
        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
            Estou estudando
                $curso em $ano
            FRASE;
    ?>
</body>
</html>