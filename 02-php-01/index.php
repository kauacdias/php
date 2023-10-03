<?php

$student = "Martin Luther King";
$nota1 = 7;
$nota2 = 9;
$nota3 = 10;

$media = ($nota1 + $nota2 + $nota3)/3;

//echo $media; 

$mediaFinal = round($media, 2);

echo $mediaFinal;

if ($mediaFinal >= 7) {
    echo "<br> <br> O aluno foi aprovado";
}
elseif ($mediaFinal >=4) {
    echo "<br> <br> O aluno vai pro conselho";
}
else {
    echo "<br> <br> O aluno foi reprovado";
}

?>