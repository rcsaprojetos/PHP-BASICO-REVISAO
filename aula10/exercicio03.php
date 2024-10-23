<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $e = $_GET["est"];
        switch ($e) {
            case 1:
            case 2:
            case 3:
            echo"Seu estado fica na região Sudeste";
            break;
            case 4:
            case 5:
            echo "Seu estado fica na região nordeste";
        }
    ?>
    <br/><a href="exercicio03.html">Voltar</a>  
</body>
</html>