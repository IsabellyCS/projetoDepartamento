<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$db = "contato"; // ou outro nome, se quiser separar
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error); // <-- isso ajuda a identificar o problema
}



$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
$id_pedido = $_POST['id_pedido'] ?? '';

// Validações básicas
if (!$nome || !$email || !$mensagem) {
    echo "Preencha todos os campos obrigatórios.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido.";
    exit;
}

// Insere no banco
$stmt = $conn->prepare("INSERT INTO contatos (nome, email, mensagem, id_pedido) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $email, $mensagem, $id_pedido);

if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao salvar a mensagem.";
}


$stmt->close();
$conn->close();
?>


