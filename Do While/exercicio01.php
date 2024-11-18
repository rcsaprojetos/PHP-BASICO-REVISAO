<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While</title>
</head>
<body>
    <?php
        $i = 0;
        $tam = 3;

        do {
            echo "<pre>Variavel i tem o valor $i<br/>";
            echo "Variavel tam tem o valor $tam</pre><br/>";
            $i++;
        } while ($i < $tam);
    ?>
</body>
</html>