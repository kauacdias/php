<?php

require_once "conn.php";

$id = filter_input(INPUT_GET, 'id');

//preparar
$stmt = $conn->prepare("SELECT * FROM users WHERE id = :id"); 

//trocar
$stmt->bindValue(':id', $id);

//executar
$stmt->execute();

//listar 1
$user = $stmt->fetch(PDO::FETCH_ASSOC)

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados</title>
</head>
<body>
    <form action="updateAction.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id']?>">
        <div>
            <label for="">Digite o seu nome:</label>
            <input type="text" name="name" value="<?= $user['name']?>">
        </div>
        <div>
            <label for="">Digite o seu email:</label>
            <input type="email" name="email" value="<?= $user['email']?>">
        </div>
        <div>
            <label for="">Digite o seu senha:</label>
            <input type="password" name="password">
        </div>
        <div>
            <button>Cadastrar</button>
        </div>
    </form>
</body>
</html>