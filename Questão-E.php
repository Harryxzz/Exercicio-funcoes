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

$fah = 90;
$celsius = (($fah - 32) / 18);
$celsius = round($celsius, 3);
echo "<br>A temperatura em Celsius de 90° fahrenheit é de: " . $celsius . "<br>";
$fah = 77;
$celsius = (($fah - 32) / 18);
$calsius = round($celsius, 3);
//usado para limitar a quantidade de casas decimais, ou seja, pra não ficar infinito
echo "A temperatura em Celsius de 77° fahrenheit é de: " . $celsius . "<br>";
$fah = 52;
$celsius = (($fah - 32) / 18);
$celsius = round($celsius, 3);
//usado para limitar a quantidade de casas decimais, ou seja, pra não ficar infinito 
echo "A temperatura em Celsius de 52° fahrenheit é de:" . $celsius . "<br>";
$fah = 12;
$celsius = (($fah - 32) / 18);
$celsius = round($celsius, 3);
echo "A temperatura em Celsius de 12° fahrenheit é de: " . $celsius . "<br>";
echo "<br>";

?>

</body>
</html>