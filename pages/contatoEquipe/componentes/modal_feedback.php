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



    <button class="botao-responder-modal">Responder</button>
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
  function abrirModal(data) {
  const modal = document.getElementById('modalFeedback');
  if (!modal) return;

  const iconesSetor = {
    'Departamento de Recursos Humanos': '../estilo/imgs/SetorRH.png',
    'Serviços de Projetos Industriais': '../estilo/imgs/SetorPI.png',
    'Departamento de Suprmentos': '../estilo/imgs/SetorDDS.png',
    'Serviços de Treinamentos Industriais': '../estilo/imgs/SetorTI.png'
  };

  document.getElementById('modalFeedbackId').value = data.id || '';
  document.getElementById('modalNome').textContent = data.nome || '';
  document.getElementById('modalEmail').textContent = data.email || '';
  document.getElementById('modalMensagem').textContent = data.mensagem || '';
  document.getElementById('modalPedido').textContent = `#${data.id_pedido || '00000'}`;
  document.getElementById('modalData').textContent = data.data_envio || '';
  // Se tiver elemento modalSetor, atualize também
  const elSetor = document.getElementById('modalSetor');
  if(elSetor) elSetor.textContent = data.setor || '';

  const imagemSetor = iconesSetor[data.setor] || '../estilo/imgs/SetorDDS.png';
  document.getElementById('modalImagemSetor').src = imagemSetor;

  modal.style.display = 'flex';
}


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

  function enviarResposta() {
    const resposta = document.getElementById('resposta').value.trim();
    const id = document.getElementById('modalFeedbackId').value;

    if (resposta === '' || id === '') {
      alert("Preencha a resposta antes de enviar.");
      return;
    }

    fetch('salvar_resposta.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: `id=${encodeURIComponent(id)}&resposta=${encodeURIComponent(resposta)}`
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        alert("Resposta salva com sucesso!");
        document.getElementById('modalFeedback').style.display = 'none';
        document.getElementById('resposta').value = '';
        location.reload(); // recarrega a página para refletir a resposta
      } else {
        alert("Erro ao salvar resposta: " + data.error);
      }
    })
    .catch(error => {
      console.error('Erro na requisição:', error);
      alert("Erro na requisição.");
    });
  }

  document.addEventListener("DOMContentLoaded", function () {
    const botaoResponder = document.querySelector(".botao-responder-modal");
    if (botaoResponder) {
      botaoResponder.addEventListener("click", enviarResposta);
    } else {
      console.warn("Botão '.botao-responder-modal' não encontrado.");
    }
  });
</script>

