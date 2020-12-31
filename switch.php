<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch - PHP</title>
</head>
<body>

<?php

    //Método Switch serve como várias portas ou opções de saída identico ao IF e Else 

    $variable = '1';

    switch ($variable) {
        case 1:
            print ("Case 1");
            break;
            case 2:
                print ("Case 2");
                break;
                case 3:
                    print ("Case 3");
                    break;
        
        default:
            print("Default");
            break;
    }
?>

</body>
</html>