<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$db = "newsletter";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo json_encode(["success" => false, "message" => "Erro de conexão com o banco de dados."]);
    exit;
}

$email = $_POST['email'] ?? '';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["success" => false, "message" => "E-mail inválido."]);
    exit;
}

// Verifica se já existe
$check = $conn->prepare("SELECT id FROM inscritos WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$check->store_result();

if ($check->num_rows > 0) {
    echo json_encode(["success" => false, "message" => "Este e-mail já está cadastrado."]);
    $check->close();
    $conn->close();
    exit;
}
$check->close();

// Insere novo
$stmt = $conn->prepare("INSERT INTO inscritos (email) VALUES (?)");

if ($stmt) {
    $stmt->bind_param("s", $email);
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Inscrição realizada com sucesso!"]);
    } else {
        echo json_encode(["success" => false, "message" => "Erro ao inserir o e-mail."]);
    }
    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Erro ao preparar a query."]);
}

$conn->close();
?>
