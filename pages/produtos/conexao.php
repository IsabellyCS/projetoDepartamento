<?php
$servername = "localhost";     // normalmente é localhost
$username = "root";            // seu usuário do MySQL
$password = "";                // sua senha do MySQL (geralmente vazia no XAMPP)
$database = "produtos";        // nome do seu banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verificando a conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
