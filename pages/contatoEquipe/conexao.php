<?php
// contatoEquipe/conexao.php

$host = 'localhost';
$db   = 'contato';    // seu banco de dados
$user = 'root';       // seu usuário MySQL
$pass = '';           // sua senha MySQL (se houver)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
    exit;
}
