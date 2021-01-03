<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

        //Sequenciais (numéricos)
        /*
        $lista_frutas = ['banana', 'maça', 'morango', 'uva'];
        $lista_frutas = array('banana', 'maça', 'morango', 'uva');
        $lista_frutas[] = 'abacaxi';

        echo "<pre>";
        var_dump($lista_frutas);
        echo "</pre>";
        
        echo "<hr>";

        echo "<pre>";
        print_r($lista_frutas);
        echo "</pre>";
        

        echo $lista_frutas[2];
        */

        //Associativos
        $lista_frutas = [
            'a' => 'Banana',
            'b' => 'Morango',
            'c' => 'Abacaxi',
        ];
        echo "<pre>";
        var_dump($lista_frutas);
        echo"</pre>";

        echo"<br>";

        echo $lista_frutas['a'];
    ?>
    
</body>
</html>