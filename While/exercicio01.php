<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>
<body>
    <?php
        $i = 0;
        $tam = 5;
        $vet = array($tam);

        while ($i <= $tam) {
            echo "Valor da variavel i: $i <br/>";
            $i++;
        }
    ?>
</body> 
</html>