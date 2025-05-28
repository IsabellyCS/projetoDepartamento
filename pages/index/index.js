const textoBox = document.querySelector('.texto-box');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        textoBox.classList.add('tilt-in-left-1');
        observer.unobserve(entry.target); // só anima uma vez
      }
    });
  }, {
    threshold: 0.3 // ativa quando 30% do elemento estiver visível
  });

  observer.observe(textoBox);



 const frases = document.querySelectorAll('.carrossel-frase');
const grupos = document.querySelectorAll('.carrossel-grupo');

let grupoAtual = 0;
let intervaloTroca;

function mostrarGrupo(index) {
  frases.forEach(f => f.classList.remove('ativa'));
  grupos.forEach(g => {
    g.classList.remove('ativo');
    g.style.opacity = '0';
    g.style.transition = 'opacity 0.8s ease';
  });

  frases[index].classList.add('ativa');
  grupos[index].classList.add('ativo');

  // Transição de opacidade
  setTimeout(() => {
    grupos[index].style.opacity = '1';
  }, 20);

  grupoAtual = index;
}

function proximoGrupo() {
  grupoAtual = (grupoAtual + 1) % grupos.length;
  mostrarGrupo(grupoAtual);
}

function iniciarAutoplay() {
  intervaloTroca = setInterval(proximoGrupo, 3000);
}

function pausarAutoplay() {
  clearInterval(intervaloTroca);
}

frases.forEach(frase => {
  frase.addEventListener('click', () => {
    const index = parseInt(frase.getAttribute('data-index'));
    mostrarGrupo(index);
    pausarAutoplay();  // opcional: pausa autoplay ao clicar
    iniciarAutoplay(); // reinicia autoplay
  });
});

// Inicializa
mostrarGrupo(grupoAtual);
iniciarAutoplay();
