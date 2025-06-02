const header = document.querySelector("header");

const modoHeaderObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const modo = entry.target.getAttribute("data-color");

      if (modo === "dark") {
        header.classList.remove("light-mode");
        header.classList.add("dark-mode");
      } else {
        header.classList.remove("dark-mode");
        header.classList.add("light-mode");
      }
    }
  });
}, {
  threshold: 0.5
});

// Observar todos os elementos que tenham o atributo data-color
document.querySelectorAll("[data-color]").forEach(section => {
  modoHeaderObserver.observe(section);
});







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







const dados = [
  {
    titulo: "Periféricos",
    descricao: "Dispositivos que complementam o uso dos computadores e tornam o trabalho mais eficiente, como mouses, teclados e webcams.",
    imagem: "./imgs/categoriaUm.png",
    link: "#"
  },
  {
    titulo: "Equipamentos",
    descricao: "Dispositivos essenciais usados pelas equipes no dia a dia e na operação dos sistemas da empresa.",
    imagem: "./imgs/categoriaDois.png",
    link: "#"
  },
  {
    titulo: "Cabos e conectividade",
    descricao: "Tudo o que você precisa para alimentar, conectar e expandir seu ambiente digital.",
    imagem: "./imgs/categoriaTres.png",
    link: "#"
  },
  {
    titulo: "Impressão e digitalização",
    descricao: "Equipamentos e suprimentos para impressão, cópia e digitalização de documentos.",
    imagem: "./imgs/categoriaQuatro.png",
    link: "#"
  },
  {
    titulo: "Cabos e conectividade",
    descricao: "Peças e itens técnicos para consertos, atualizações e suporte a equipamentos.",
    imagem: "./imgs/categoriaCinco.jpg",
    link: "#"
  }
];

let indiceAtual = 0;

const titulo = document.getElementById("titulo");
const descricao = document.getElementById("descricao");
const imagem = document.getElementById("imagem");
const link = document.getElementById("link");
const posicao = document.getElementById("posicao");

const btnAnterior = document.getElementById("anterior");
const btnProximo = document.getElementById("proximo");

function atualizarCarrossel() {
  const item = dados[indiceAtual];
  titulo.textContent = item.titulo;
  descricao.textContent = item.descricao;
  imagem.src = item.imagem;
  link.href = item.link;
  posicao.textContent = `${indiceAtual + 1}/5`;

  // Controle de opacidade e desativação dos botões
  if (indiceAtual === 0) {
    btnAnterior.style.opacity = "0.5";
    btnAnterior.disabled = true;
  } else {
    btnAnterior.style.opacity = "1";
    btnAnterior.disabled = false;
  }

  if (indiceAtual === dados.length - 1) {
    btnProximo.style.opacity = "0.5";
    btnProximo.disabled = true;
  } else {
    btnProximo.style.opacity = "1";
    btnProximo.disabled = false;
  }
}


btnAnterior.addEventListener("click", () => {
  indiceAtual = (indiceAtual - 1 + dados.length) % dados.length;
  atualizarCarrossel();
});

btnProximo.addEventListener("click", () => {
  indiceAtual = (indiceAtual + 1) % dados.length;
  atualizarCarrossel();
});

// inicializa
atualizarCarrossel();





document.getElementById('formNewsletter').addEventListener('submit', function (event) {
  event.preventDefault(); // evita recarregar a página

  const emailInput = document.getElementById('email');
  const email = emailInput.value.trim();

  fetch('salvar.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `email=${encodeURIComponent(email)}`
  })
  .then(response => response.json())
  .then(data => {
    alert(data.message);
    if (data.success) {
      emailInput.value = ''; // limpa o campo após sucesso
    }
  })
  .catch(error => {
    console.error('Erro:', error);
    alert('Erro ao enviar. Tente novamente.');
  });
});


