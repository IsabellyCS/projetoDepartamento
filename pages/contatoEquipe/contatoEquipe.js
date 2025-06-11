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
