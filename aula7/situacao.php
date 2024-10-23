<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota1 = $_GET["a"];
        $nota2 = $_GET["b"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 e $m";
        echo "<br/>A situacao do aluno e ". (($m>5) ? "Aprovado" : "Reprovado");
    ?>
</body>
</html>