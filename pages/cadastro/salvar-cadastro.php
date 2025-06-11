echo "<pre>";
print_r($_POST);
echo "</pre>";
exit;


<?php
// Conexão com o banco
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acessodepartamento";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$cpf = $_POST['cpf'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo']; // vem do <select>

$cpf = $conn->real_escape_string($cpf);
$email = $conn->real_escape_string($email);
$senha = $conn->real_escape_string($senha);
$cargo = $conn->real_escape_string($cargo);

$sql = "INSERT INTO usuarios (cpf, email, senha, cargo)
        VALUES ('$cpf', '$email', '$senha', '$cargo')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='login.php';</script>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
