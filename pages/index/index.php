<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Departamento de Suprimentos</title>
    <style>
      
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            letter-spacing: 1.5px;
        }

        html, body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    font-weight: thin;
    color: #0D0D0F;
    background: transparent; /* fundo transparente */
    overflow-x: hidden;
    background-color: white;
}

header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 65px;
  display: flex;
  align-items: center;
  margin-left: 20px;
  z-index: 1000;
  background-color: transparent;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.logo {
  margin-left: 175px;
  margin-right: 360px;
  height: 50px;
  width: 60px;
  cursor: pointer;
}

/* Estilo base */
.botao1, .botao2 {
  width: 158px;
  height: 47px;
  border-radius: 27px;
  font-size: 20px;
  margin-right: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
}

/* Modo Escuro */
header.dark-mode .botao1 {
  background-color: white;
  color: black;
  border: none;
}

header.dark-mode .botao1:hover {
  background-color: transparent;
  color: white;
  border: 3px solid white;
}

header.dark-mode .botao2 {
  background-color: transparent;
  color: white;
  border: 3px solid white;
}

header.dark-mode .botao2:hover {
  background-color: white;
  color: black;
}

/* Modo Claro */
header.light-mode .botao1 {
  background-color: black;
  color: white;
  border: none;
}

header.light-mode .botao1:hover {
  background-color: white;
  color: black;
  border: 3px solid black;
}

header.light-mode .botao2 {
  background-color: transparent;
  color: black;
  border: 3px solid black;
}

header.light-mode .botao2:hover {
  background-color: #111;
  color: white;
  
}









/* seu fundo com imagem */
.fundo {
    width: 100%;
    height: 100vh;
    background-image: url('./imgs/backgroundIndex.png');
    background-size: cover;
    background-position: center;
    position: relative;
}

/* para não ter o conteúdo escondido atrás do header fixo */
.overlay {
    padding-top: 80px; /* espaço para o header de 65px + 15px margem */
    width: 100%;
    height: calc(100% - 80px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding-left: 5%;
    color: white;
}


        .titulo-principal {
            font-size: 55px;
            font-weight: thin;
            line-height: 1.2em;
            letter-spacing: 5px;
            margin-top: 100px;
        }

        .subtitulo {
            font-size: 1.5em;
            margin-top: 20px;
            margin-bottom: 350px;
        }
        .bottom {
            position: absolute;
            bottom: 50px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 1350px;
        }

        .btn-entrar {
            background-color:transparent;
            color: #fff;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: bold;
            border: 2px solid #fff;
            cursor: pointer;
            font-size: 20px;
        }
        .btn-entrar:hover {
            background-color:#fff;
            color: #090909;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .info-direita .linha {
            font-size: 20px;
            cursor: pointer;
            position: relative;
            display: inline-block;
            
        }
        .info-direita .linha::after {
          content: "";
          position: absolute;
          left: 0;
          bottom: 0; /* ou ajuste conforme necessário */
          height: 2px;
          background: white;
          width: 100%;
          transform: scaleX(0);
          transform-origin: left;
          transition: transform 0.4s ease;
        }
        .info-direita:hover .linha::after {
          transform: scaleX(1);
        }
        
        .pontos {
    position: relative;
    width: 100%;
    height: 600px;
    background-image: url('imgs/dotsBackground.png');
    background-repeat: no-repeat;
    background-position: right;
    background-size: cover;

}

.pontos .texto-box {
    position: absolute;
    right: 60px; /* margem da direita */
    margin-top: 180px;
    transform: translateY(-50%);
    width: 600px;
    padding: 30px;
    border-radius: 35px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    font-family: 'Poppins', sans-serif;
    color: #333;
    font-size: 27px;
    line-height: 1.5;
}
.texto-box {
    background: radial-gradient(circle, rgba(255,255,255,1) 20%,rgba(255,255,255,1) 80%, rgba(255,255,255,0) 100%);

}
.tilt-in-left-1 {
  animation: tilt-in-left-1 1.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}

@-webkit-keyframes tilt-in-left-1 {
  0% {
    -webkit-transform: rotateX(-30deg) translateX(-300px) skewX(-30deg);
            transform: rotateX(-30deg) translateX(-300px) skewX(-30deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateX(0deg) translateX(0) skewX(0deg);
            transform: rotateX(0deg) translateX(0) skewX(0deg);
    opacity: 1;
  }
}
@keyframes tilt-in-left-1 {
  0% {
    -webkit-transform: rotateX(-30deg) translateX(-300px) skewX(-30deg);
            transform: rotateX(-30deg) translateX(-300px) skewX(-30deg);
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateX(0deg) translateX(0) skewX(0deg);
            transform: rotateX(0deg) translateX(0) skewX(0deg);
    opacity: 1;
  }
}

   .carrossel-container {
    font-family: Arial, sans-serif;
    background: #0D0D0F;
    color: #ccc;
    text-align: center;
    padding: 90px;
}

.carrossel-texto {
    letter-spacing: 5px;
    font-size: 40px;
    max-width: 1300px;
    margin: 0 auto;
    line-height: 1.6;
    font-weight: 500;
    text-align: left;
}

.carrossel-frase {
    cursor: pointer;
    transition: color 0.3s, background-color 0.3s;
    position: relative;
}

.carrossel-frase:hover {
    background: linear-gradient(90deg, #B987FF, #0078F2, #9EFEF9);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
@keyframes gradientMove {
  0% {background-position: 0% 50%;}
  50% {background-position: 100% 50%;}
  100% {background-position: 0% 50%;}
}

.carrossel-frase.ativa {
    color: white;
}

.carrossel-imagens {
  display: flex;
  justify-content: center;
  gap: 20px;
  flex-wrap: nowrap;
  margin-top: 50px;
  overflow: hidden;
  width: 100%;
}

.carrossel-grupo {
  display: none;
  opacity: 0;
  flex-direction: row;
  justify-content: center;
  gap: 20px;
  transition: opacity 0.8s ease;
}

.carrossel-grupo.ativo {
  display: flex;
}

.carrossel-img {
  height: 384px;
  object-fit: cover;
  border-radius: 10px;
  transition: transform 0.3s ease, opacity 0.3s ease;
}
.carrossel-img-container {
  position: relative;
  display: inline-block; /* mantém as imagens lado a lado dentro do grupo */
  cursor: pointer;
  border-radius: 10px; /* mesma borda arredondada da imagem */
  overflow: hidden; /* para o filtro não "vazar" */
  height: 384px; /* igual altura da imagem */
  width: auto; /* largura será controlada pela imagem */
}

.carrossel-img-container img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  display: block;
  border-radius: 10px;
  transition: filter 0.3s ease, transform 0.3s ease;
}

/* Texto do fornecedor - inicialmente invisível */
.fornecedor-texto {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 1.5rem;
  text-shadow: 0 0 10px rgba(0,0,0,0.8);
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.3s ease;
  white-space: nowrap;
  user-select: none;
}

/* Hover no container da imagem */
.carrossel-img-container:hover img {
  filter: brightness(40%);
  transform: scale(1.05);
}

.carrossel-img-container:hover .fornecedor-texto {
  opacity: 1;
}

/* Tamanhos */
.smallUm {
  width: 300px;
}
.largeUm {
  width: 654px;
}
.smallDois {
  width: 282px;
}
.largeDois {
  width: 500px;
}




.categorias {
  display: flex;
  flex-direction: row;
  height: 600px;
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
  color: #0D0D0F;
  margin-left: 25px;
  margin-top: 100px;
}

.categorias img {
   height: 600px;
  width: 543px;
  object-fit: cover;
  margin-left: auto;
  flex-shrink: 0; /* <- importante */
}

.information {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex: 1;
  max-width: calc(100% - 543px - 40px); /* largura total - imagem - padding */
  box-sizing: border-box;
}


.titulo {
  font-size: 45px;
  margin-top: -85px;
  color: #0D0D0F;
  font-weight: 100;
}

.linha-categoria {
  width: 700px;
  border: 1px solid #0D0D0F;
  margin: 20px 0 10px;
}

.descricao {
  font-size: 30px;
  max-width: 800px;
  margin-bottom: auto;
  color: #0D0D0F;
  margin-top: 55px;
}

.botoes-row {
  display: flex;
  font-size: 22px;
  justify-content: space-between;
  align-items: center;
  flex-wrap: nowrap; /* NÃO deixa quebrar para baixo */
  width: 100%;
}
.botoes-direita {
  display: flex;
  align-items: center;
  gap: 20px;
  flex-shrink: 0;
  margin-right: 50px;
}

.botao-link {
  background-color: transparent;
  color: #0D0D0F;
  padding: 15px 20px;
  text-decoration: none;
  border: 2px solid #0D0D0F;
  border-radius: 30px;
  font-weight: 500;
  transition: 0.3s;
  
}
.botao-link:hover {
  background-color: #0D0D0F;
  color: white;
}

.posicao {
  color: #0D0D0F;
  width: 50px;
}

.controles {
  display: flex;
  gap: 20px;
}

.circulo {
  background-color: transparent;
  border: 2px solid #0D0D0F;
  border-radius: 50%;
  width: 36px;
  height: 36px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
  padding: 30%;
}
.circulo:hover {
  background-color: #0D0D0F;
}
.circulo:hover img {
  filter: brightness(0) invert(1); /* inverter cor da seta no hover */
}

.circulo img {
  width: 14px;
  height: 14px;
  object-fit: contain;
}

.seta-direita {
  transform: rotate(180deg);
}


.newsletter {
  display: flex;
  flex-direction: row;
  margin-left: 75px;
  margin-top: 150px;
  height: 350px;
}
.inscrito {
  display: flex;
  flex-direction: column;
  width: 50%;
  margin: 0 80px;
  align-items: center;
}
.tituloNewsletter {
  font-weight: 100;
  font-size: 60px;
}
h6 {
  font-size: 30px;
  text-align: center;
  font-weight: 100;
  margin-bottom: 10px;

}
.inscrito input {
  width: 100%;
  height: 35px;
  margin: 25px 0;
  border: none;
  border-bottom: 0.5px solid #0D0D0F; /* cor da sua identidade visual */
  outline: none; /* remove borda azul ao focar */
}
.inscrito input:hover {
  border-bottom: 1px solid #0D0D0F; /* um pouquinho mais forte */
}
.inscreva-se {
  border-radius: 25px;
  padding: 8px 20px;
  font-size: 22px;
  cursor: pointer;
  background-color: transparent;
  margin-top: 50px;
  margin-left: 30%;
}
.inscreva-se:hover {
  color: #fff;
  background-color: #000;
  transition: 0.3s ease;
}
.input-wrapper {
  position: relative;
  width: 500px;
}

.input-wrapper input {
  width: 100%;
  height: 35px;
  padding-bottom: 10px;
  padding-left: 50px; /* espaço para o ícone + margem */
  border: none;
  border-bottom: 0.5px solid #0D0D0F;
  outline: none;
  font-size: 22px;
  background-color: transparent;
  color: #0D0D0F;
}

/* Ícone de e-mail à esquerda */
.input-wrapper .input-icon {
  position: absolute;
  left: 10px;
  top: 45%;
  transform: translateY(-50%);
  width: 32px;
  height: 32px;
  pointer-events: none;
}


/* Correção para autofill do navegador */
.input-wrapper input:-webkit-autofill {
  background-color: transparent !important;
  -webkit-box-shadow: 0 0 0 30px white inset !important; /* força fundo branco */
  -webkit-text-fill-color: #0D0D0F !important; /* força cor do texto */
}




.rodape-container {
  background-color: #0e0e0f;
  color: white;
  margin-top: 50px;
}

.rodape-container .info {
  margin: 15px 10px;
  font-size: 17px; /* era o padrão, agora levemente maior */
}

.rodape-conteudo {
  display: flex;
  justify-content: space-between;
  padding: 40px;
  padding-bottom: 80px; /* AUMENTO AQUI */
  flex-wrap: wrap;
}

.rodape-coluna {
  flex: 1;
  min-width: 250px;
  margin: 20px;
}

.rodape-logo {
  width: 80px; /* Aumentado de 70px */
  margin-bottom: 10px;
}

.rodape-logo-conjunto {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 10px;
}

.rodape-logo-texto {
  font-size: 38px; /* de 35px para 38px */
  color: white;
  padding: 5px;
}

.rodape-linha {
  margin-top: -10px;
  border: none;
  border-top: 2px solid #5e5ce6;
  width: 350px;
  margin-bottom: 15px;
}

.rodape-coluna h4 {
  font-size: 20px; /* de 18px para 20px */
  margin-bottom: 10px;
}

.rodape-coluna ul {
  list-style: none;
  padding: 0;
}

.rodape-coluna li {
  margin-bottom: 8px; /* mais espaçamento */
  font-size: 17px; /* de 15px para 17px */
}

.rodape-coluna ul li a {
  color: #aaa;
  text-decoration: none;
  position: relative;
  display: inline-block;
  transition: color 0.3s ease;
}

.rodape-coluna ul li a::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background-color: white;
  transition: width 0.3s ease;
}

.rodape-coluna ul li a:hover {
  color: white;
}

.rodape-coluna ul li a:hover::after {
  width: 100%;
}

.rodape-news {
  font-size: 18px; /* de 16px para 18px */
  margin-bottom: 10px;
}

.rodape-form {
  display: flex;
  flex-direction: column;
}

.rodape-input {
  padding: 12px; /* de 10px para 12px */
  border: 1px solid #aaa;
  border-radius: 5px;
  margin-bottom: 10px;
  font-size: 16px; /* de 14px para 16px */
}

.rodape-botao {
  background-color: white;
  color: black;
  border: none;
  padding: 12px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.rodape-botao:hover {
  background-color: #eee;
}

.rodape-creditos {
  text-align: center;
  background-color: #7b88dd;
  padding: 12px;
  font-size: 16px; /* de 14px para 16px */
  color: white;
}
.rodape-coluna form {
  display: flex;
  flex-direction: column;
}










    </style>
</head>
<body>
    <?php
$html = file_get_contents('header.html');
echo $html;
?>

    <div class="fundo" data-theme="dark">
        <div class="overlay">
            <div class="titulo-principal">
                DEPARTAMENTO DE <br> SUPRIMENTOS
            </div>
            <div class="subtitulo">Reposição de material de informática</div>
            <div class="bottom">
            <button class="btn-entrar">Entre agora</button>
            <div class="info-direita">
              <span class="linha">Reposições, novidades e</span><br>
              <span class="linha">sugestões</span>
            </div>
          </div>
        </div>
    </div>
    <div class="pontos" data-theme="light">
    <div class="texto-box">
        Garantimos que cada equipe tenha os recursos certos no momento certo, com eficiência, suporte técnico confiável e foco em alta performance operacional.
    </div>
</div>


<div class="carrossel-container" data-theme="dark">
  <p class="carrossel-texto">
    <span class="carrossel-frase" data-index="0">Conheça os novos periféricos.</span>
    <span class="carrossel-frase" data-index="1"> Itens essenciais para o dia a dia.</span>
    <span class="carrossel-frase" data-index="2"> Equipamentos de alto desempenho.</span>
    <span class="carrossel-frase" data-index="3"> Organização para Setups eficientes.</span>
  </p>

  <div class="carrossel-imagens">
    <!-- Grupo 0 -->
    <div class="carrossel-grupo ativo" data-group="0">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselUmUm.png" class="carrossel-img smallUm" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselUmDois.png" class="carrossel-img largeUm" />
        <span class="fornecedor-texto">EletroniMax</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselUmTres.png" class="carrossel-img smallUm" />
        <span class="fornecedor-texto">TechSupply</span>
      </div>
    </div>

    <!-- Grupo 1 -->
    <div class="carrossel-grupo" data-group="1">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselDoisUm.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">VoltBrasil</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselDoisDois.png" class="carrossel-img smallDois" />
        <span class="fornecedor-texto">MegaChip</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselDoisTres.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">EletroFácil</span>
      </div>
    </div>

    <!-- Grupo 2 -->
    <div class="carrossel-grupo" data-group="2">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselTresUm.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">NovaPlaca</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselTresDois.png" class="carrossel-img smallDois" />
        <span class="fornecedor-texto">CircuitoDireto</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselTresTres.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Fio&Carga</span>
      </div>
    </div>

    <!-- Grupo 3 -->
    <div class="carrossel-grupo" data-group="3">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselQuatroUm.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">BitParts</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselQuatroDois.png" class="carrossel-img smallDois" />
        <span class="fornecedor-texto">ConectaTech</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselQuatroTres.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Modulink</span>
      </div>
    </div>
  </div>
</div>


<div class="categorias" data-theme="light">
  <div class="information">
    <h2 class="titulo" id="titulo">Equipamentos</h2>
    <hr class="linha-categoria" />
    <p class="descricao" id="descricao">Dispositivos essenciais usados pelas equipes no dia a dia e na operação dos sistemas da empresa.</p>

    <div class="botoes-row">
  <a href="#" class="botao-link" id="link">Dê uma olhada</a>

  <div class="botoes-direita">
    <span class="posicao" id="posicao">1/5</span>
    <div class="controles">
      <button class="circulo" id="anterior">
        <img src="./imgs/setaEsquerda.png" alt="Seta para esquerda">
      </button>
      <button class="circulo" id="proximo">
        <img src="./imgs/setaEsquerda.png" alt="Seta para direita" class="seta-direita">
      </button>
    </div>
  </div>
</div>

  </div>

  <img id="imagem" src="./imgs/categoriaDois.png" alt="Imagem da categoria">

</div>

<div class="newsletter" data-theme="light">
  <h1 class="tituloNewsletter">Fique de olho nas novidades</h1>
  <div class="inscrito">
    <h6>Se inscreva no nosso newsletter</h6>
    <form id="formNewsletter">
      <div class="input-wrapper">
        <img src="./imgs/email-icon.png" alt="Ícone de e-mail" class="input-icon" />
        <input type="email" placeholder="Seu e-mail" name="email" id="email" autocomplete="email" required />
      </div>
      <button class="inscreva-se">Inscreva-se</button>
    </form>
    <p id="mensagem" style="display: none; color: #6E6EFF; margin-top: 15px;"></p>
  </div>
</div>

<div class="rodape-container">
  <div class="rodape-conteudo">
    <div class="rodape-coluna">
      <div class="rodape-logo-conjunto">
        <img src="./imgs/LogoRodape.png" alt="Logo Augebit" class="rodape-logo">
        <span class="rodape-logo-texto">AUGEBIT</span>
      </div>
      <hr class="rodape-linha">
      <p class="info">augebt@gmail.com</p>
      <p class="info">+ (55) 11 12345–6789</p>
  </div>
    
    <div class="rodape-coluna">
  <h4>Produtos</h4>
  <ul>
    <li><a href="http://localhost/projetoDepartamento/pages/produtos/produto.php">Periféricos</a></li>
    <li><a href="http://localhost/projetoDepartamento/pages/produtos/produto.php">Equipamentos</a></li>
    <li><a href="http://localhost/projetoDepartamento/pages/produtos/produto.php">Cabos e conectividade</a></li>
    <li><a href="http://localhost/projetoDepartamento/pages/produtos/produto.php">Impressão e digitalização</a></li>
    <li><a href="http://localhost/projetoDepartamento/pages/produtos/produto.php">Manutenção e peças</a></li>
  </ul>
</div>

    <div class="rodape-coluna">
      <p class="rodape-news">Fique por dentro das novidades do nosso<br>departamento.</p>
      <form id="formNewsletterRodape">
        <input type="email" placeholder="E-mail" id="emailRodape" class="rodape-input" required>
        <button type="submit" class="rodape-botao">Inscreva-se</button>
      </form>
      <p id="mensagemRodape" style="display: none; color: #6E6EFF; margin-top: 15px;"></p>
    </div>
  </div>
  <div class="rodape-creditos">
    Todos os direitos reservados à equipe do projeto semestral da Augebit – Departamento de Suprimentos de Informática.
  </div>
</div>













<script src="index.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('formNewsletter');
  const emailInput = document.getElementById('email');
  const mensagem = document.getElementById('mensagem');

  form.addEventListener('submit', function (event) {
    event.preventDefault();

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
      if (data.success) {
        // Esconde o formulário e mostra a mensagem
        form.style.display = 'none';
        mensagem.style.display = 'block';
        mensagem.textContent = data.message;
      } else {
        alert(data.message); // mostra erro
      }
    })
    .catch(error => {
      console.error('Erro:', error);
      alert('Erro ao enviar. Tente novamente.');
    });
  });
});

const formRodape = document.getElementById('formNewsletterRodape');
    const emailInputRodape = document.getElementById('emailRodape');
    const mensagemRodape = document.getElementById('mensagemRodape');

    if (formRodape) {
      formRodape.addEventListener('submit', function (event) {
        event.preventDefault();
        const email = emailInputRodape.value.trim();

        fetch('salvar.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: `email=${encodeURIComponent(email)}`
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            formRodape.style.display = 'none';
            mensagemRodape.style.display = 'block';
            mensagemRodape.textContent = data.message;
          } else {
            alert(data.message);
          }
        })
        .catch(error => {
          console.error('Erro:', error);
          alert('Erro ao enviar. Tente novamente.');
        });
      });
    }



const header = document.querySelector("header");
const logo = document.getElementById("logo"); // <- linha adicionada

const observer = new IntersectionObserver(
  entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && entry.intersectionRatio >= 0.5) {
        const tema = entry.target.getAttribute("data-theme");

        if (tema === "light") {
          header.classList.add("light-mode");
          header.classList.remove("dark-mode");
          logo.src = "imgs/logoPreto.png"; // ← agora usa a logo preta no modo claro
        } else {
          header.classList.add("dark-mode");
          header.classList.remove("light-mode");
          logo.src = "imgs/logoBranco.png"; // ← agora usa a logo branca no modo escuro
        }

      }
    });
  },
  {
    root: null,
    threshold: 0.8,
    rootMargin: "-65px 0px 0px 0px"
  }
);

document.querySelectorAll("[data-theme]").forEach(secao => {
  observer.observe(secao);
});










</script>


</body>
</html>
