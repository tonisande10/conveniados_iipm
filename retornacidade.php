<?php
    $pdo = new PDO("conexao.php");
    $dados = $pdo->prepare("SELECT * FROM cidade");
    $dados->execute();
    echo json_encode($dados->fetchAll(PDO::FETCH_ASSOC));
?>