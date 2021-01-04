<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

        $num = 1;

        //Condição = comparação ou lógicos
        echo 'Inicio loop <br>';
        while($num < 10) { 

            $num++; //Critério de parada
            echo $num. '<br>';
            //break; ou continue; para PARAR o loop
        }
        echo 'Fim loop';

    ?>
    
</body>
</html>