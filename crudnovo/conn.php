<?php

$host = "localhost"; 
$user = "root";
$password = "";
$db = "maianga";

try {
    $conn = new PDO("mysql:host={$host}; dbname={$db}", $user , $password );
    echo "conectou";
} catch (PDOException $e) {
    //echo "Ocorreu um erro: " .$e;
    echo "Servidor indisponivel, retorne mais tarde";
}


