<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
<section>
    
        <form>

        <h1>Valor Convertido</h1>
        <?php 
// cotação do Banco Central

$inicio = date("m-d-Y", strtotime("-7 days"));
$fim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$cotação = $dados["value"][0]["cotacaoCompra"];

// quantos reais vc tem
    $real = $_GET["nreais"] ?? 0;

// quantos dolares vc tem.
    $dolar = $real/$cotação ;
    
    // mostrar o resultado em number_format

    /*echo "Seus R$ ". number_format($real, 2, ",", ".") . " equivalem a USD ".  number_format($dolar, 2, ",","."); */

    // Formatação de moedas com internalização
    // Biblioteca intl (internallization PHP)
    $padrao = numfmt_create("pt-br", NumberFormatter::CURRENCY);

    echo "<p>Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>".  numfmt_format_currency($padrao, $dolar, "USD")."</strong> </p>";
    echo '
    <p>Cotação obtida diretamente do <a href="https://www.bcb.gov.br/" target="_blank" style="color: black;">Banco Central do Brasil</a>.</p>';

?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
     
     </form>
    
    </section>
</main>

</body>
</html>