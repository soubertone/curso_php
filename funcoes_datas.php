<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

    //Recuperação da data atual
    //echo date('d/m/Y - G:i')."<br>";

    //Ver o timezone que está configurado
    //echo date_default_timezone_get();

    //Modificar o timezone
    //echo date_default_timezone_set('America/Sao_Paulo');
    //echo '<br>';
    //echo date('d/m/Y - G:i')."<br>";

    $data_inicial = '2020-12-01';
    $data_final = '2021-01-01';

    //Timestamp
    //Transformar dados textuais em segundos

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    
    echo $data_inicial . " - " . $time_inicial;
    echo "<br>";
    echo $data_final . " - " . $time_final;


    ?>
    
</body>
</html>