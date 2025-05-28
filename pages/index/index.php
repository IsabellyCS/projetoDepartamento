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
}

header {
    position: fixed;      /* fixa no topo da tela */
    top: 0;
    left: 0;
    width: 100%;
    height: 65px;
    background-color: transparent;
    display: flex;
    align-items: center;
    margin-left: 20px;
    z-index: 1000;        /* fica acima de tudo */
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
            padding: 12px 25px;
            border-radius: 20px;
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
    background: #111;
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
  font-weight: 700;
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
  height: 650px;
  width: 100%;
  background-color: white;
  padding: 20px;
  box-sizing: border-box;
  color: #0D0D0F;
  margin-left: 25px;
  
}

.categorias img {
  height: 650px;
  width: 543px;
  object-fit: cover;
  margin-left: auto;
}

.information {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex: 1;
}

.titulo {
  font-size: 45px;
  margin: 0;
  color: #0D0D0F;
  height: 150px;
  font-weight: 100;
}

.linha-categoria {
  width: 700px;
  border: 1px solid #0D0D0F;
  margin: 10px 0;
}

.descricao {
  font-size: 30px;
  max-width: 800px;
  margin-bottom: auto;
  color: #0D0D0F;
  margin-top: 25px;
}

.botoes-row {
  display: flex;
  align-items: center;
  gap: 30px;
  font-size: 18px;
  margin-bottom: 30px;
}

.botao-link {
  background-color: transparent;
  color: #0D0D0F;
  padding: 10px 20px;
  text-decoration: none;
  border: 2px solid #0D0D0F;
  border-radius: 20px;
  font-weight: bold;
  transition: 0.3s;
}
.botao-link:hover {
  background-color: #0D0D0F;
  color: white;
}

.posicao {
  margin-left: 200px;
  color: #0D0D0F;
}

.controles {
  display: flex;
  gap: 10px;
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





    </style>
</head>
<body>
    <?php
$html = file_get_contents('header1.html');
echo $html;
?>
    <div class="fundo">
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
    <div class="pontos">
    <div class="texto-box">
        Garantimos que cada equipe tenha os recursos certos no momento certo, com eficiência, suporte técnico confiável e foco em alta performance operacional.
    </div>
</div>


<div class="carrossel-container">
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
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselUmTres.png" class="carrossel-img smallUm" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
    </div>

    <!-- Grupo 1 -->
    <div class="carrossel-grupo" data-group="1">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselDoisUm.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselDoisDois.png" class="carrossel-img smallDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselDoisTres.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
    </div>

    <!-- Grupo 2 -->
    <div class="carrossel-grupo" data-group="2">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselTresUm.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselTresDois.png" class="carrossel-img smallDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselTresTres.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
    </div>

    <!-- Grupo 3 -->
    <div class="carrossel-grupo" data-group="3">
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselQuatroUm.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselQuatroDois.png" class="carrossel-img smallDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
      <div class="carrossel-img-container">
        <img src="./imgs/imgCarrosselQuatroTres.png" class="carrossel-img largeDois" />
        <span class="fornecedor-texto">Voxen</span>
      </div>
    </div>
  </div>
</div>


<div class="categorias">
  <div class="information">
    <h2 class="titulo">Título da Categoria</h2>
    <hr class="linha-categoria" />
    <p class="descricao">Essa é uma descrição da categoria, com informações interessantes e relevantes.</p>

    <div class="botoes-row">
      <a href="#" class="botao-link">Dê uma olhada</a>
      <span class="posicao">1/5</span>
      <div class="controles">
        <button class="circulo">
          <img src="./imgs/setaEsquerda.png" alt="Seta para esquerda">
        </button>
        <button class="circulo">
          <img src="./imgs/setaEsquerda.png" alt="Seta para direita" class="seta-direita">
        </button>
      </div>
    </div>
  </div>

  <img src="./imgs/logoBranca.png" alt="Imagem da categoria">
</div>








<script src="index.js"></script>



</body>
</html>
