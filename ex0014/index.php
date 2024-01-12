<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maquina do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calculando Sua Idade</h1>

<?php 
$atual = date("Y");
$nasc = $_GET['nasc']?? 2000;
$ano = $_GET['ano']?? $atual;
?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get">
    <label for="nasc"> Em que ano você nasceu?</label>
    <input type="number" name="nasc" id="nasc" min="1900">
    <label for="ano">Quer saber sua idade em qual ano? (Atualmente estamos em <?= date("Y") ?>)</label>
    <input type="number" name="ano" id="ano" max="<?=date("Y")?>" value="<?= $ano ?>">
    <input type="submit" value="Qual será minha idade?">
    </form>
</main>
<section>
    <?php $idade = $ano - $nasc; ?>
    <h2>Resultado:</h2>
    <p>Quem nasceu em <?= $nasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?>! </p>
</section>
</body>
</html>