<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "<br><h2>Maior numero inteiro: </h2><br>";
    echo "Numero = 1 <br>";
    echo "Numero = 4";
    $n1 = 1;
    $n2 = 4;
    if ($n1 == $n2) {
        echo "<p>Os numeros sao iguais</p>";
    } elseif ($n1 >= $n2) {
        echo "<p>O numero 1:" . $n1 . ", e maior que o numero 2: " . $n2 . "</p>";
    } else {
        echo "<p><p>O numero 1:" . $n1 . ", e menor que o numero 2: " . $n2 . "</p>";
    }

    ?>

</body>
</html>