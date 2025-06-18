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
           

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
    
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];

            $dol = $real / $cotacao;

            //Formatação de moedas com internacionalização;
            $default = numfmt_create("pt-BR", NumberFormatter :: CURRENCY);
            

            echo "Seus " . numfmt_format_currency($default, $real, "BRL") . " equivalem a " . numfmt_format_currency($default, $dol, "USD") . ".";

        ?>
        <p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/">Banco Central do Brasil</a>.</p>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p>
    </main>
</body>
</html>