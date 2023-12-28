<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario Retroalimentado</title>
</head>
<body>
    <?php 
    /* capturando dados do Formulario Retroalimentado
     <?= ?> é usado quando existe apenas UM ECHO dentro da tag */
    
     $valor1 = $_GET["v1"]?? 0;

     $valor2 = $_GET["v2"]?? 0;
    ?>
<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

    <label for="v1">Valor 1:</label>
    <input type="number" name="v1" id="v1">

    <label for="v2">Valor 2:</label>
    <input type="number" name="v2" id="v2">

    <input type="submit" value="Enviar">

    </form>
</main>
    
</body>
</html>