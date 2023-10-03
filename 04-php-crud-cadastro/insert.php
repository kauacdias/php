<?php

require_once "conn.php";

//aqui vem do form (valor do name) do input index
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

echo "$name - $email - $password";

//users (name, email, password) é o que tem no banco
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

//troca
$stmt->bindValue(':name',$name);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':password',$password);

//executa
$stmt->execute();

header('Location: list.php');
