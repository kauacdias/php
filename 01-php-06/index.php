<?php

$name = "Bruno Velame";
$altura = 1.75;
$peso = 80;
$average = ($peso)/($altura*$altura); 

if ($average < 18.5) {
    echo "$name tem $altura de altura, pesa $peso kg e está abaixo do peso na escala IMC";
}
elseif ($average >18.6 & $average < 24.9) {
    echo "$name tem $altura de altura, pesa $peso kg e está com o peso ideal na escala IMC";
}
elseif ($average > 25 & $average < 29.9) {
    echo "$name tem $altura de altura, pesa $peso kg e está levemente acima do peso na escala IMC";
}
elseif ($average > 30 & $average < 34.9) {
    echo "$name tem $altura de altura, pesa $peso kg e está com obesidade grau I na escala IMC ";
}
elseif ($average > 35 & $average <39.9) {
    echo "$name tem $altura de altura, pesa $peso kg e está com obesidade grau II (severa) na escala IMC";
}
else {
    echo "$name tem $altura de altura, pesa $peso kg e está com obesidade grau III (mórbida) na escala IMC";
}
?>