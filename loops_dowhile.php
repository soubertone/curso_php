<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores - Atribuição</title>
</head>
<body>

    <?php

        $x = 1;

        echo "<h2>Do While</h2>";

        do {
            echo $x . "<br>";
            $x++;
        } while ($x <= 10);

        echo "<hr>";

        $y = 1;

        echo "<h2>While</h2>";

        while($y <= 10) {
            echo $y ."<br>";
            $y++;
        }
    ?>
    
</body>
</html>