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
<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?> " method="get"></form>
    <label for="nasc"> Em que ano você nasceu?</label>
    <input type="number" name="nasc" id="nasc" min="1900">
    <label for="ano">Quer saber sua idade em qual ano?</label>
    <input type="number" name="ano" id="ano" max="<?=date("Y")?>">
</main>

</body>
</html>