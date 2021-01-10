<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando - Loops com array</title>
</head>
<body>

    <?php

        $funcionarios = array(
        array( 'nome' => 'João', 'salario' => 1500, 'data_nascimento' => '06/12/2000'),
        array( 'nome' => 'Maria', 'salario' => 2000, 'data_nascimento' => '18/08/1980'), 
        array( 'nome' => 'Julia', 'salario' => 2500, 'data_nascimento' => '25/07/1997'));

        echo '<pre>';
        print_r ($funcionarios);
        echo '</pre>';

       /* foreach($funcionarios as $idx => $nome_funcionarios) {
            echo  'ID ' . $idx .' - Nome: ' .$nome_funcionarios . '<br>';
        } */

        //Foreach encadeado
        
        foreach($funcionarios as $idx => $funcionario) {

            foreach($funcionario as $idx2 => $valor){
                echo $idx2 . ' - ' . $valor . '<br>';                
            }
            echo '<hr>';
        }

    ?>
    
</body>
</html>