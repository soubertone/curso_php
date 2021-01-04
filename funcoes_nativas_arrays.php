<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

        //Verifica se o parametro/variável é um array - is_array()
        /* 
        $array = array('String');
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim é um array';
        } else {
            echo 'Não é um array';
        }
        */

        //Retorna todas as chaves do array - array_keys()
        /*
        $array = [1 => 'a', 2 => 'b', 18 => 'c'];
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        $retorno = array_keys($array);
        echo '<pre>';
        print_r($retorno);
        echo '</pre>';
        */

        //Ordenar arrays em ordem (muda os índices) - sort()
        /*
        $array = ['Mouse', 'Cabo', 'Gabinete', 'Notebook', 'Fonte ATX'];
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        sort($array); //True ou False
        echo '<pre>';
        print_r($array); //Exibição ordenada
        echo '</pre>';
        */

        //Ordenar arrays mantendo os índices - asort()
        /*
        $array = ['Mouse', 'Cabo', 'Gabinete', 'Notebook', 'Fonte ATX'];
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        asort($array); //True ou False
        echo '<pre>';
        print_r($array); //Exibição ordenada
        echo '</pre>';
        */

        //Conta quantos arrays existem - count()
        /*
        $array = ['Teclado', 'Mouse', 'Cabo', 'Gabinete', 'Notebook', 'Fonte ATX'];
        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>';
        */

        //Junta/Mescla arrays - array_merge()
        /*
        $array1 = ['osx', 'Windows'];
        $array2 = ['Linux'];
        $array3 = ['Solaris'];

        $novo_array = array_merge($array1,$array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';
        */

        //Divide arrays com delimitadores - explode()
        /*
        $string = '26/04/2020';
        $array_retorno = explode('/', $string);

        echo '<pre>';
            echo $string;
            print_r($array_retorno);
        echo '</pre>';
        */

        //Junta elementos de um array em uma string - implode()
        /*
        $array = ['26','04', '2020'];
        $array_retorno = implode('/', $array);

        echo '<pre>';
            echo $array_retorno;
            print_r($array);
        echo '</pre>';
        */

    ?>
    
</body>
</html>