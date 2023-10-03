<?php

$pensadores = ["Darcy Ribeiro", "Anisio Teixeira", "Paulo Freire", "Rubem Alves"];

/*
print_r($pensadores);

echo "<br>";

var_dump($pensadores);
*/

$n = count($pensadores);
echo $n . "<br>";

for ($i=0; $i < $n; $i++) { 
    $pensUnique = $pensadores[$i];
    echo "$i - $pensUnique <br>";
}