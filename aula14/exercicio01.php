<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function soma ($a, $b) {
            $s = $a + $b;
            echo "<p>A soma vale $s</p>";
        }
        soma (6, 3);
        soma (5, 6);
    ?>
</body>
</html>