<?php

$student = "Martin Luther King";

$arrayNotas = [6, 7, 10];

echo array_sum($arrayNotas)."<br>";
echo count($arrayNotas)."<br>";

$media = array_sum($arrayNotas)/count($arrayNotas);
echo $media."<br>";

if ($media >= 7) {
    echo "<br> <br> $student foi aprovado";
}
elseif ($media >=4) {
    echo "<br> <br> $student vai pro conselho";
}
else {
    echo "<br> <br> $student foi reprovado";
}