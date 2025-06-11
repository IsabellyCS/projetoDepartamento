<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Verifica se está logado
if (empty($_SESSION['cargo'])) {
    echo "<script>alert('Você precisa estar logado para enviar a mensagem.'); window.location.href='../login/login.php';</script>";
    exit;
}

$host = "localhost";
$db = "contato";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Pega dados do POST
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$mensagem = $_POST['mensagem'] ?? '';
$id_pedido = $_POST['id_pedido'] ?? '';
$cargo = $_SESSION['cargo'];

// Validações
if (!$nome || !$email || !$mensagem) {
    echo "Preencha todos os campos obrigatórios.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "E-mail inválido.";
    exit;
}

// Insere no banco
$stmt = $conn->prepare("INSERT INTO contatos (nome, email, cargo, mensagem, id_pedido) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nome, $email, $cargo, $mensagem, $id_pedido);

if ($stmt->execute()) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao salvar a mensagem.";
}

$stmt->close();
$conn->close();
?>
