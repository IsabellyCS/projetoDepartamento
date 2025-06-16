<?php
require_once 'conexao.php';
require_once 'componentes/card_feedback.php';
require_once 'componentes/modal_feedback.php';

$sql = "SELECT id, nome, email, cargo AS setor, mensagem, id_pedido, data_envio AS data, resposta 
        FROM contatos 
        ORDER BY data_envio DESC 
        LIMIT 50";

$stmt = $pdo->query($sql);
$feedbacks = $stmt->fetchAll();
?>

<!-- Container flexível para os cards -->
<div class="cards">
    <?php foreach ($feedbacks as $f) {
        exibirCardFeedback($f);
    } ?>
</div>
