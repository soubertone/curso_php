<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    //in_array() -> Retorna TRUE ou FALSE para a pesquisa
    //array_search() -> 

    $lista_frutas = array('Banana', 'Maçã', 'Uva', 'Morango');

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    echo array_search('Banana', $lista_frutas); //Retorna o índice que está armazenado ou NULL

    # in_array ('Banana', $lista_frutas); //Pesquisa e retorna TRUE ou FALSE

    /* if ($existe) {
        echo 'O valor pesquisado existe no array';
    } else {
        echo 'O valor pesquisado não existe no array';
    } */

    ?>
    
</body>
</html>