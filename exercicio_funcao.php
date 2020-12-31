<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    function calcularImposto ($salario) {
        if ($salario<=1903.98) {
            $valorimposto = 0;
            echo 'O valor do imposto é R$'.$valorimposto;
        }
        elseif ($salario>=1903.99 && $salario<=2826.65) {
            $valorimposto = ($salario * 7.5) /100;
            echo 'O valor do imposto é R$'.$valorimposto;
        }
        elseif ($salario>=2826.66 && $salario<=3751.05) {
            $valorimposto = ($salario * 15) /100;
            echo 'O valor do imposto é R$'.$valorimposto;
        }
        elseif ($salario>=3751.06 && $salario<=4664.68) {
            $valorimposto = ($salario * 22.5) /100;
            echo 'O valor do imposto é R$'.$valorimposto;
        }
        else{
            $valorimposto = ($salario * 27.5) /100;
            echo 'O valor do imposto é R$'.$valorimposto;
        }
    }

    calcularImposto(1904);

    ?>
    
</body>
</html>