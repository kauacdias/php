<?php   

$host = "localhost";
$user = "root";
$password = "";
$db = "aula04";

try {
    $conn = new PDO("mysql:host={$host}; dbname={$db}", $user , $password );
    //echo "conectou";
} catch (PDOException $e) {
    //echo "Ocorreu um erro: " .$e; 
    echo "Servidor indisponível, retorne mais tarde.";
}