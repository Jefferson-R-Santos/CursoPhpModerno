<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>SuperGlobais</title>
</head>
<body>
    
<main>

<pre>
    <?php
    
    echo "<h1>Super Global Get</h1>";
    var_dump($_GET);

    echo "<h1><br>Super Global Post</h1>";
    var_dump($_POST);

    ?>
</pre>

</main>

</body>
</html>