<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento </h1>
    </header>
    <main>
        <?php 
        //var_dump($_GET); // Super Variavel Global $_GET, $_POST, $_COOKIES
        // A $_REQUEST é uma junção das 3 citadas acima

    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    
    echo "é um prazer te conhecer $nome $sobrenome, esté é o meu site. "
        ?>
    </main>
</body>
</html>