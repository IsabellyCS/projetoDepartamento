document.querySelectorAll('.secao').forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelectorAll('.secao').forEach(b => b.classList.remove('ativa'));
        btn.classList.add('ativa');

        const tab = btn.getAttribute('data-tab');

        document.querySelectorAll('.tab-content').forEach(t => t.classList.remove('ativa'));
        document.getElementById(tab).classList.add('ativa');

        const container = document.querySelector(`#${tab} .cards`);
        container.innerHTML = 'Carregando...';

        let url = '';
        switch (tab) {
            case 'ultimos':
                url = 'feedbacks_ultimos.php';
                break;
            case 'nao-respondidas':
                url = 'feedbacks_nao.php';
                break;
            case 'respondidas':
                url = 'feedbacks_respondidas.php';
                break;
            case 'por-id':
                url = 'feedbacks_id.php?id_pedido=5322'; // Exemplo. Depois você pode colocar um input de busca.
                break;
        }

        fetch(url)
            .then(res => res.text())
            .then(html => {
                container.innerHTML = html;
            })
            .catch(err => {
                container.innerHTML = 'Erro ao carregar os dados.';
                console.error(err);
            });
    });
});

// Carregar a aba padrão ao entrar
document.querySelector('.secao.ativa').click();


//modal 
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
function enviarResposta() {
  const id = document.getElementById('modalFeedbackId').value;
  const resposta = document.getElementById('resposta').value.trim();

  if (!resposta) {
    alert('Por favor, digite uma resposta antes de enviar.');
    return;
  }

  fetch('salvar_resposta.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `id=${encodeURIComponent(id)}&resposta=${encodeURIComponent(resposta)}`
  })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        alert('Resposta enviada com sucesso!');
        document.getElementById('modalFeedback').style.display = 'none';
        // Opcional: atualizar visual na tela, remover card, marcar como respondido...
      } else {
        alert('Erro ao enviar resposta: ' + (data.error || 'Erro desconhecido'));
      }
    })
    .catch(err => {
      console.error('Erro na requisição:', err);
      alert('Erro ao enviar resposta. Tente novamente.');
    });
}




  




