<?php

require_once "conn.php";

//aqui vem do form (valor do name) do input index
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

echo "$name - $email - $password";

//users (name, email, password) é o que tem no banco
$stmt = $conn->prepare("UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id");

//troca
$stmt->bindValue(':id',$id);
$stmt->bindValue(':name',$name);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':password',$password);

//executa
$stmt->execute();