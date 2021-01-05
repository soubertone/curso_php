<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando - Loops com array</title>
</head>
<body>

    <?php

    $registro = array(
        ['titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'], 
        ['titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'], 
        ['titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'],
        ['titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteudo noticia 4']);

    echo '<pre>';
    print_r($registro);
    echo '</pre>';
    echo '<br><br>';

    echo 'O array possui: '. count($registro) . " registros.";

    /* while ($idx < count($registro)){

        echo '<h2>' . $registro[$idx]['titulo'] . "</h2>";
        echo '<p>' . $registro[$idx]['conteudo'] . "</p>";
        echo '<hr>';

        $idx++;
    } */
    
    /* do {
        echo '<h2>' . $registro[$idx]['titulo'] . "</h2>";
        echo '<p>' . $registro[$idx]['conteudo'] . "</p>";
        echo '<hr>';

        $idx++;
    } while($idx < count($registro)); */

    for ($idx = 0; $idx < count($registro); $idx++){
        echo '<h2>' . $registro[$idx]['titulo'] . "</h2>";
        echo '<p>' . $registro[$idx]['conteudo'] . "</p>";
        echo '<hr>';
    }

    ?>
    
</body>
</html>