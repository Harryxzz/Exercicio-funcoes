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

echo "<h2>Formatacao de CPF</h2>";
$cpf = 2150167;
echo str_pad($cpf, 11, '0', STR_PAD_LEFT) . "<br>"; // Use a função mb_strlen()para descobrir a quantididade de dígitos.
echo mb_strlen("21501670000") . "<br>";

//Use a função mb_substr() para separar os dígitos para acrenstar os pontos e traço para formatar como CPF.
$cpf = 21501670000;
$cpfform = substr($cpf, 0, 3) . '.' .
    substr($cpf, 3, 3) . '.' .
    substr($cpf, 6, 3) . '-' .
    substr($cpf, 9, 2);
echo "$cpfform<br>";

?>

       

</body>
</html>