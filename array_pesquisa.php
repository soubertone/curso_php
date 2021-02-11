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
    $lista_frutas2 = array('Manga', 'Pessego', 'Pera', 'Melancia');

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    echo '<pre>';
    print_r($lista_frutas2);
    echo '</pre>';

    $array1 = array_search('Banana', $lista_frutas); //Retorna o índice que está armazenado ou NULL

    $array2 = array_search('Pera', $lista_frutas2); //Retorna o índice que está armazenado ou NULL

    if($array1 == $array2){
        echo 'Os índices do array são iguais. <br>';
        echo $array1 . ' e ' . $array2;
    } else {
        echo 'Os índices do array são diferentes. <br>';
        echo $array1 . ' e ' . $array2;
    }

    # in_array ('Banana', $lista_frutas); //Pesquisa e retorna TRUE ou FALSE

    /* if ($existe) {
        echo 'O valor pesquisado existe no array';
    } else {
        echo 'O valor pesquisado não existe no array';
    } */

    ?>
    
</body>
</html>