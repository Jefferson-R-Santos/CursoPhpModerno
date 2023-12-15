<pre>
<?php 

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'12-08-2023\'&@dataFinalCotacao=\'12-15-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$cotacao = ["value"][0]["cotacaoCompra"];

echo "a cotação foi $cotacao"

?>
</pre>