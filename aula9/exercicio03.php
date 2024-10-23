<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
        $n1 = isset($_GET["nota1"]) ? $_GET["nota1"] : "0";
        $n2 = isset($_GET["nota2"]) ? $_GET["nota2"] : "0";
        $m = ($n1 + $n2) / 2;
        echo "As notas foram $n1 e $n2, tendo o total de média $m.<br/>";
        if ($n1 >= 6 && $n2 >= 6) {
            echo "O aluno foi aprovado com a média de $m.";
            }
            elseif ($n1 <6 && $n2 >=6 ) {
                echo "O aluno tirou $n1 na primeira avaliação e ficou de recuperação. <br/> ";
            }
            elseif ( $n1 >=6 && $n2 <6) {
                echo "O aluno tirou $n2 na primeira avaliação e ficou de recuperação. <br/> ";
            }
            elseif ( $n1 <6 && $n2 <6) {
                echo "O aluno não tirou a nota mínima nas duas avaliações e foi reprovado. <br/> ";
            }     
    ?>
</body>
</html>