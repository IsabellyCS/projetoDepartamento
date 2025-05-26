<?php
// Conexão com o banco
$servername = "localhost";
$username = "root"; // ou seu usuário do banco
$password = "";     // senha do MySQL, se houver
$dbname = "acessodepartamento";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recebe dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Previne SQL Injection
$email = $conn->real_escape_string($email);
$senha = $conn->real_escape_string($senha);

// Consulta
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

// Validação
if ($result->num_rows > 0) {
    // Login bem-sucedido
    echo "<script>alert('Login realizado com sucesso!'); window.location.href='pagina-restrita.php';</script>";
} else {
    // Login falhou
    echo "<script>
    alert('Email ou senha incorretos.');
    window.location.href = 'login.php';
</script>";

}

$conn->close();
?>