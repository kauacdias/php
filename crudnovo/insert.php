<?php

require_once "conn.php";

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

echo "$name - $email - $password";

$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");

$stmt->bindValue(':name',$name);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':password',$password);

$stmt->execute();

header('Location: list.php');