<?php

$name = "Antônio Jorge";
$idade = 72;

if ($idade >= 18 & $idade <70) {
    echo "O(a) civil $name tem $idade anos e está apto para votar";
}
elseif ($idade >= 16 & $idade < 18) {
    echo "O(a) civil $name tem $idade anos e tem voto facultativo";
}
elseif ($idade >70) {
    echo "O(a) civil $name tem $idade anos e tem voto facultativo";
}
else {
    echo "O(a) civil $name tem $idade anos e não é apto ao voto";
}
?>