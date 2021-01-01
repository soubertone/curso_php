<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    $numero = 81;    

    //Arredonda um valor para cima
    echo ceil($numero)."<br>";
    
    //Arredonda um valor para baixo
    echo floor($numero)."<br>";

    //Arredonda com base nas casas decimais
    echo round($numero)."<br>";

    //Gera um número aleatório - Baseado nos parâmetros
    echo rand(1,9999)."<br>";

    //Mostra o maior número aleatório do sitema operacional
    echo getrandmax()."<br>";

    //Retorna a raiz quadrada de um número
    echo sqrt($numero);

    ?>
    
</body>
</html>