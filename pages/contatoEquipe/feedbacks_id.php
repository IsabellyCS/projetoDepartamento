<?php
require_once 'conexao.php';
require_once 'componentes/card_feedback.php';
require_once 'componentes/modal_feedback.php';

$sql = "SELECT id, nome, email, cargo AS setor, mensagem, id_pedido, data_envio AS data, resposta 
        FROM contatos 
        WHERE resposta <> '' AND resposta IS NOT NULL
        ORDER BY data_envio DESC";

$stmt = $pdo->query($sql);
$feedbacks = $stmt->fetchAll();
?>

<div class="cards">
    <?php foreach ($feedbacks as $f) {
    exibirCardFeedback($f);
        } ?>

?>
