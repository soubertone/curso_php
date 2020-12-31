<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting - PHP</title>
</head>
<body>

<?php

    //Método Casting serve para converter variáveis

        //gettype() = retorna o tipo da variável
        $valor = 10.5;
        $valor2 = (int) $valor; //float, double, real

        echo $valor. ' ' .gettype($valor);
        echo '<br>';
        echo $valor2. ' ' .gettype($valor2);

?>

</body>
</html>