<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando - Loops com array</title>
</head>
<body>

    <?php

    $registros = array(
        ['titulo' => 'Titulo da noticia 1', 'conteudo' => 'Conteudo da noticia 1'],
        ['titulo' => 'Titulo da noticia 2', 'conteudo' => 'Conteudo da noticia 2'],
        ['titulo' => 'Titulo da noticia 3', 'conteudo' => 'Conteudo da noticia 3'],
        ['titulo' => 'Titulo da noticia 4', 'conteudo' => 'Conteudo da noticia 4'],
        ['titulo' => 'Titulo da noticia 5', 'conteudo' => 'Conteudo da noticia 5'],
        ['titulo' => 'Titulo da noticia 6', 'conteudo' => 'Conteudo da noticia 6']
    );

    echo'<pre>';
    print_r($registros);
    echo'</pre>';

    foreach($registros as $reg_noticias) {
        echo "<h2>".$reg_noticias['titulo']."</h2>";
        echo "<p>".$reg_noticias['conteudo']."</p>";
        echo '<hr>';
    }

    ?>
    
</body>
</html>