<?php
    header('Content-Type: application/json');

    $pdo = new PDO('mysql:host=localhost;dbname=testeajax', 'root', '');
    $stmt = $pdo->prepare('SELECT * FROM pais');
    $stmt->execute();

    if ($stmt->rowCount() >=1 ) {
        echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else {
        echo json_encode('Nenhum registro encontrado');
    }

    

?>