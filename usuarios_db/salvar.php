<?php

include 'conexao.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);

    if($stmt->execute()){
        header('Location: index.php');
    } else{
        echo "Erro ao salvar dados";
    }
}

?>