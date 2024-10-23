<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteudo da variavel X e $x";
        echo "<br/> A variavel criada recebeu o valor $abc";
    ?>
</body>
</html>