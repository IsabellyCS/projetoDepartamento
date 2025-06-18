<div id="modalFeedback" class="modal-overlay" onclick="fecharModal(event)">
  <div class="modal-content">
    <div class="modal-topo">
      <img id="modalImagemSetor" src="../estilo/imgs/SetorRH.png" alt="Setor" class="imagem-perfil">
      <div class="info-texto">
        <h3 id="modalNome">Nome</h3>
        <div class="linhaAzul"></div>
        <p id="modalEmail">email@exemplo.com</p>
        <div class="linhaAzul"></div>
      </div>
    </div>

    <div class="modal-mensagem">
      <p id="modalMensagem">Mensagem do usuário...</p>
      <div class="linha"></div>
    </div>

    <div class="modal-detalhes">
      <span>Pedido: <u id="modalPedido">#00000</u></span>
      <span>Data: <u id="modalData">00/00/0000</u></span>
    </div>

    <label for="resposta">Responder</label>
    <textarea id="resposta" placeholder="Digite sua resposta..."></textarea>
    <input type="hidden" id="modalFeedbackId" value="">



    <button class="botao-responder-modal" onclick="enviarResposta()">Responder</button>
  </div>
</div>

<style>

  .modal-overlay {
    position: fixed;
    top: 0; left: 0;
    width: 100vw; height: 100vh;
    background: rgba(0, 0, 0, 0.6);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 999;
  }
  .modal-overlay.ativo {
    display: flex; /* ou block */
    justify-content: center;
    align-items: center;
  }
  .modal-content {
    background: white;
    padding: 30px;
    border-radius: 8px;
    width: 90%;
    max-width: 600px;
    font-family: 'Inter', sans-serif;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    position: relative;
  }
  .modal-topo {
    margin: -30px -30px 0;
    display: flex;
    align-items: center;
    background: #0D0D0F;
    color: white;
    padding: 16px;
    border-radius: 8px 8px 0 0;
  }

  .modal-topo .imagem-perfil {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-right: 20px;
  }
  .linhaAzul {
    margin-top: -15px;
    width: 350px;
    height: 1px;
    background-color: #3258D1;
  }
  .modal-header {
    display: flex;
    gap: 15px;
    border-bottom: 2px solid #3258D1;
    padding-bottom: 10px;
    margin-bottom: 15px;
  }
  .modal-detalhes {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    font-size: 14px;
    color: black;
  }
  .foto-usuario {
    width: 60px;
    height: 60px;
    border-radius: 50%;
  }
  .modal-mensagem {
  margin: 20px 0 10px;
  font-size: 16px;
}

.modal-mensagem .linha {
  border-bottom: 2px solid #3f6ef1;
  width: 100%;
  margin: 10px 0;
}
  .modal-infos {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #3258D1;
    padding-bottom: 10px;
    margin-bottom: 15px;
  }
  textarea {
    width: 100%;
    height: 100px;
    padding: 10px;
    resize: none;
    font-size: 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    background-color: transparent;
  }
  .modal-content button {
    margin-top: 15px;
    background: #3258D1;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 25px;
    font-weight: bold;
    cursor: pointer;
  }
  .botao-responder-modal {
  background: #3f6ef1;
  border: none;
  color: white;
  padding: 10px 25px;
  font-size: 16px;
  border-radius: 25px;
  cursor: pointer;
  float: right;
}
</style>

<script>
  function abrirModalFromBase64(encoded) {
  try {
    const decoded = atob(encoded);
    const data = JSON.parse(decoded);
    abrirModal(data);
  } catch (e) {
    console.error("Erro ao decodificar os dados do modal:", e);
    alert("Erro ao abrir o modal. Dados inválidos.");
  }
}



  function fecharModal(e) {
    if (e.target.id === 'modalFeedback') {
      document.getElementById('modalFeedback').style.display = 'none';
    }
  }

  
</script>

