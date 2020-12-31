<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    //Função Void = Sem retorno
    function exibirBoasVindas () {
        echo 'Bem vindo ao curso de PHP';
    }

    //Função return = Com retorno
    function calcularAreaTerreno($largura, $comprimento) {
        $area = $largura * $comprimento;
        return $area;
    }

    echo calcularAreaTerreno(5, 25);

    ?>
    
</body>
</html>