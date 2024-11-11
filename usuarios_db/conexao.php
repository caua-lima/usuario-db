<?php

$host = 'localhost';
$dbname = 'usuarios_db';
$username = 'root';
$password = 'Dn0309##';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo "Erro na conexão" . $e->getMessage();
}

?>