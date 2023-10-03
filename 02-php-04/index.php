<?php

$sorteio = rand(0,5);
echo $sorteio." - ";

switch ($sorteio) {
    case 0:
        echo "Você perdeu a vez!";
        break;
    case 1:
        echo "Avance uma casa";
        break;
    case 2:
        echo "Avance duas casas";
        break;
    case 3:
        echo "Avance duas casas e jogue novamente";
        break;
    case 4:
        echo "Avance duas casas e os demais voltam duas casas";
        break;
    default:
        echo "Volte cinco casas";
        break;
}


?>