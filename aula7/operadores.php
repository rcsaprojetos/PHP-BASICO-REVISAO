<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é " . number_format(num: $preco, decimals: 2);
        $preco += $preco * 10 / 100;
        echo "<br/>E o novo preço com 10% de aumento é igual a R$ " . number_format($preco, 2);
    ?>
</body>
</html>