<?php
function exibirCardsPorTipo($tipo) {
    include 'conexao.php';

    // Corrigido: usa 'tipo' em vez de 'cargo'
    $stmt = $conn->prepare("SELECT * FROM produtos WHERE tipo = ?");
    $stmt->bind_param("s", $tipo);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($produto = $result->fetch_assoc()) {
        echo '
        <div class="conteudo_b">
            <img src="' . $produto['imagemPainel'] . '" alt="' . $produto['nome'] . '" style="width:100%; border-radius: 30px 30px 0 0;">
            <div style="padding: 10px;">
                <h4>' . $produto['nome'] . '</h4>
                <p>ID: ' . $produto['id'] . '</p>
            </div>
        </div>';
    }

    $stmt->close();
}
?>
