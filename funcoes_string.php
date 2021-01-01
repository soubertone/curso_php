<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    $texto = "Curso completo de PHP". "<br>";

    //String to lower
    echo $texto;
    echo strtolower($texto);

    echo "<hr>";

    //String to Upper
    echo $texto;
    echo strtoupper($texto);

    echo "<hr>";

    //Upper First
    echo $texto;
    echo ucfirst($texto);

    echo "<hr>";

    //String to len
    echo $texto;
    echo strlen($texto);

    echo "<hr>";

    //String Replace
    echo $texto;
    echo str_replace("PHP", "JavaScript", $texto);

    echo "<hr>";

    //Subs String
    echo $texto;
    echo substr($texto, 0,12)."...";

    ?>
    
</body>
</html>