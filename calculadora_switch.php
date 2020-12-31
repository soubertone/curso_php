<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora - Switch</title>
</head>
<body>

<?php

    $numero1 = 13; //Selecione o número que será usado
    $numero2 = 3; //Selecione o 2° número que será usado
    $operador = 'soma'; //Operação

    switch ($operador) {
        case 'soma':
            $resultado = $numero1 + $numero2;
                        echo 'O resultado da '.$operador.' entre: '.$numero1.' e '.$numero2.' é: '.$resultado; //impressão do resultado
            break;
            case 'subtracao':
                $resultado = $numero1 - $numero2;
                        echo 'O resultado da '.$operador.' entre: '.$numero1.' e '.$numero2.' é: '.$resultado; //impressão do resultado
                break;
                case 'multiplicacao':
                    $resultado = $numero1 * $numero2;
                        echo 'O resultado da '.$operador.' entre: '.$numero1.' e '.$numero2.' é: '.$resultado; //impressão do resultado
                    break;
                    case 'divisao':
                        $resultado = $numero1 / $numero2;
                        echo 'O resultado da '.$operador.' entre: '.$numero1.' e '.$numero2.' é: '.$resultado; //impressão do resultado
                        break;
                        case 'modulo':
                            $resultado = $numero1 % $numero2;
                            echo 'O resultado da '.$operador.' entre: '.$numero1.' e '.$numero2.' é: '.$resultado; //impressão do resultado
                            break;
        
        default:
            echo 'Você não selecionou nenhum operador.';
            break;
    }


?>
    
    
</body>
</html>