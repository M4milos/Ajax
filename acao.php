<?php
    header('Content-Type: application/json');

    $nome = $_POST['name'];
    $estado = $_POST['state'];
    $cidade = $_POST['city'];

    $pdo = new PDO('mysql:host=localhost;dbname=testeajax', 'root', '');
    $stmt = $pdo->prepare('INSERT INTO pais (nome, estado, cidade) VALUES (:nome, :estado, :cidade)');
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':estado', $estado);
    $stmt->bindValue(':cidade', $cidade);
    $stmt->execute();

    if ($stmt->rowCount() >=1 ) {
        echo json_encode('Salvou no banco');
    } else {
        echo json_encode('Não salvou no banco');
    }

    

?>