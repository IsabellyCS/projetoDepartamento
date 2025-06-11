<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Conexão com o banco
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acessodepartamento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$email = $conn->real_escape_string($_POST['email']);
$senha = $conn->real_escape_string($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['email'] = $usuario['email'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['cargo'] = $usuario['cargo'];

    session_write_close();
    header("Location: ../contato/contato.php");
    exit;

    if ($usuario['cargo'] === 'Departamento de Suprimentos') {
        echo "<script>alert('Login como administrador'); window.location.href='../contato/contato.php';</script>";
    } else {
        echo "<script>alert('Login como usuário comum'); window.location.href='../contato/contato.php';</script>";
    }
} else {
    echo "<script>alert('Email ou senha incorretos.'); window.location.href='login.php';</script>";
}

$conn->close();
?>
