<?php
/*
nome do(a) estudante = Dandara da Silva
n1 = 8
n2 = 9
n3 = 7
média = (n1 + n2 + n3)/3

se a média >=7 
    aprovada
senão se a média >= 4
    conselho
senão 
    reprovada
*/
$nameStudent = "Dandara da Silva";
$n1 = 9;
$n2 = 8;
$n3 = 7;
$average = ($n1 + $n2 + $n3)/3; 

//echo "O(a) aluno(a) $nameStudent tirou as notas $n1, $n2, $n3 e ficou com média igual a $average";

if ($average >= 7) {
    echo "O(a) aluno(a) $nameStudent tirou as notas $n1, $n2, $n3, ficou com média igual a $average e foi aprovado(a)";
}
elseif ($average >= 4) {
    echo "O(a) aluno(a) $nameStudent tirou as notas $n1, $n2, $n3, ficou com média igual a $average e foi para o conselho";
}
else {
    echo "O(a) aluno(a) $nameStudent tirou as notas $n1, $n2, $n3, ficou com média igual a $average e foi reprovado(a)";
}

?>