<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = isset($_GET["ano"]) ? $_GET ["ano"] :"1900";
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos. <br/>";
        if ($i<16) {
            $v = "não vota";
            }
        elseif (($i >= 16 && $i < 18) || ($i >65)) {
            $v = "tem direito a votar ou não";
        } 
        else {
            $v = "é obrigado a votar";
        }                                
        echo "E devido a sua idade você $v.";
    ?>
</body>
</html>