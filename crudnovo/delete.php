<?php

require_once "conn.php";

$id = filter_input(INPUT_GET, 'id');

$stmt = $conn->prepare("DELETE FROM users WHERE id = :id");

$stmt->bindValue(':id', $id);

$stmt->bindValue();

header('Location: list.php')