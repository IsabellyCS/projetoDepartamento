console.log("JS carregado!");

// const header = document.querySelector("header");
// if (header) {  // só roda o código se existir o header

//   // Pega o valor do data-header (ex: "default" ou "azul")
//   const headerType = header.getAttribute("data-header");

//   console.log("Header ativo:", headerType);

//   if (headerType === "default") {
//     // Código só executa para o header.php (data-header="default")

//     const logo = document.getElementById("logo");

//     const observer = new IntersectionObserver(
//       entries => {
//         entries.forEach(entry => {
//           if (entry.isIntersecting && entry.intersectionRatio >= 0.5) {
//             const tema = entry.target.getAttribute("data-theme");

//             if (tema === "light") {
//               header.classList.add("light-mode");
//               header.classList.remove("dark-mode");
//               logo.src = "../estilo/imgs/logoPreto.png";
//             } else {
//               header.classList.add("dark-mode");
//               header.classList.remove("light-mode");
//               logo.src = "../estilo/imgs/logoBranco.png";
//             }
//           }
//         });
//       },
//       {
//         root: null,
//         threshold: 0.8,
//         rootMargin: "-65px 0px 0px 0px"
//       }
//     );

//     document.querySelectorAll("[data-theme]").forEach(secao => {
//       observer.observe(secao);
//     });

//     const textarea = document.querySelector('.pergunta');
//     if (textarea) {
//       textarea.addEventListener('input', () => {
//         textarea.style.height = 'auto';
//         textarea.style.height = textarea.scrollHeight + 'px';
//       });
//     }

//   } else {
//     // Header diferente do default, não faz nada
//   }

// } else {
//   // Header não existe, não faz nada
// }











  const textarea = document.querySelector('.pergunta');
if (textarea) {
  textarea.addEventListener('input', () => {
    textarea.style.height = 'auto';
    textarea.style.height = textarea.scrollHeight + 'px';
  });
}











document.getElementById('form-contato').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const botao = form.querySelector('button[type="submit"]');

    // Guarda estado original
    const textoOriginal = botao.textContent;
    const larguraOriginal = botao.offsetWidth + "px";
    const bordaOriginal = botao.style.borderRadius || "20px";

    // Fixa a largura atual para evitar encolhimento
    botao.style.width = larguraOriginal;

    fetch('salvar_contato.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(data => {
        botao.textContent = "Mensagem Enviada!";
        botao.style.backgroundColor = "#406FFF";
        botao.style.width = "250px"; // MAIS largo
        botao.style.borderRadius = "20px";
        botao.disabled = true;

        form.reset();

        setTimeout(() => {
            botao.textContent = textoOriginal;
            botao.style.backgroundColor = "";
            botao.style.width = larguraOriginal;
            botao.style.borderRadius = bordaOriginal;
            botao.disabled = false;
        }, 4000);
    })
    .catch(error => {
        botao.textContent = "Erro ao enviar";
        botao.style.backgroundColor = "red";
        botao.style.width = "190px";
        botao.style.borderRadius = "20px";
        botao.disabled = true;

        setTimeout(() => {
            botao.textContent = textoOriginal;
            botao.style.backgroundColor = "";
            botao.style.width = larguraOriginal;
            botao.style.borderRadius = bordaOriginal;
            botao.disabled = false;
        }, 4000);
    });
});






