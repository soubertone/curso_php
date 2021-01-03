<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    $lista_coisas = [];

    $lista_coisas['frutas'] = array(1 => 'Banana',
                                    2 => 'Maça',
                                    3 => 'Morango',
                                    4 => 'Uva');
    
    $lista_coisas['pessoas'] = array(1 => 'João',
                                    2 => 'José',
                                    3 => 'Maria');

    echo "<pre>";
    print_r($lista_coisas);
    echo "</pre>";

    echo "<hr>";
    echo $lista_coisas['frutas'][3];

    echo "<br>";
    echo $lista_coisas['pessoas'][2];

    ?>
    
</body>
</html>