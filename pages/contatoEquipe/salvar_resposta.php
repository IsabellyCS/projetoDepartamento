<?php
// contatoEquipe/salvar_resposta.php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
    exit;
}

header('Content-Type: application/json');

if (!isset($_POST['id']) || !isset($_POST['resposta'])) {
    echo json_encode(['error' => 'Dados incompletos']);
    exit;
}

$id = (int) $_POST['id'];
$resposta = trim($_POST['resposta']);

if ($id <= 0 || $resposta === '') {
    echo json_encode(['error' => 'Dados inválidos']);
    exit;
}

require 'conexao.php'; // caminho correto para o seu arquivo de conexão

try {
    $sql = "UPDATE contato SET resposta = :resposta WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['resposta' => $resposta, 'id' => $id]);

    echo json_encode(['success' => true]);
} catch (PDOException $e) {
    echo json_encode(['error' => 'Erro ao salvar resposta: ' . $e->getMessage()]);
}
