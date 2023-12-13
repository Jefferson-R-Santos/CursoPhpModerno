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

        
        <?php 
// cotação do google
    $cotação = 4.96;
// quantos reais vc tem
    $real = $_GET["nreais"] ?? 0;

// quantos dolares vc tem.
    $dolar = $real/$cotação ;
    
    // mostrar o resultado
    /*echo "Seus R$ ". number_format($real, 2, ",", ".") . " equivalem a USD ".  number_format($dolar, 2, ",","."); */

    // Formato profissional 
    $padraobr = numfmt_create("pt-br", NumberFormatter::CURRENCY);

    echo "Seus ". numfmt_format_currency($padraobr, $real, "BRL") . " equivalem a ".  numfmt_format_currency($padraobr, $dolar, "USD");


?>

        <p><a href="javascript:history.go(-1)">Voltar</a></p>
     
     </form>
    
    </section>
</main>

</body>
</html>