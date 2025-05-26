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
        }

        .subtitulo {
            font-size: 1.5em;
            margin-top: 20px;
            margin-bottom: 100px;
        }

        .btn-entrar {
            margin-top: 70px;
            background-color:#fff;
            color: #090909;
            padding: 12px 25px;
            border-radius: 20px;
            font-weight: bold;
            border: 2px solid #fff;
            cursor: pointer;
            font-size: 20px;
        }
        .btn-entrar:hover {
            background-color: transparent;
            color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            transition: 1s;
        }

        .info-direita {
            position: absolute;
            bottom: 90px;
            right: 40px;
            text-align: right;
            font-size: 20px;
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
.galeria {
    background-color: black;
    height: 700px;
}
.meu-container {
  font-family: Arial, sans-serif;
  background: #fff;
  padding: 30px;
  text-align: center;
}

.meu-container .text-container {
  margin-bottom: 30px;
  font-size: 1.4rem;
}

/* Frases dentro do container */
.meu-container .frase1,
.meu-container .frase2,
.meu-container .frase3,
.meu-container .frase4 {
  display: inline-block;
  margin: 0 10px;
  padding: 5px 15px;
  cursor: pointer;
  position: relative;
  color: #333;
  border-radius: 6px;
  font-weight: 600;
  transition: color 0.3s ease;
}

.meu-container .frase1:hover,
.meu-container .frase2:hover,
.meu-container .frase3:hover,
.meu-container .frase4:hover {
  color: white;
}

.meu-container .frase1:hover::before,
.meu-container .frase2:hover::before,
.meu-container .frase3:hover::before,
.meu-container .frase4:hover::before {
  content: "";
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  border-radius: 6px;
  background: linear-gradient(270deg, #B987FF, #0078F2, #9EFEF9);
  background-size: 600% 600%;
  animation: gradientMove 5s ease infinite;
  z-index: -1;
}

@keyframes gradientMove {
  0% {background-position: 0% 50%;}
  50% {background-position: 100% 50%;}
  100% {background-position: 0% 50%;}
}

.meu-container .images-container {
  display: flex;
  justify-content: center;
  gap: 20px;
}

.meu-container .img-small {
  width: 150px;
  height: 192px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

.meu-container .img-large {
  width: 327px;
  height: 192px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 3px 10px rgba(0,0,0,0.2);
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
            <button class="btn-entrar">Entre agora</button>
            <div class="info-direita">
                Reposições, novidades e<br> sugestões
            </div>
        </div>
    </div>
    <div class="pontos">
    <div class="texto-box">
        Garantimos que cada equipe tenha os recursos certos no momento certo, com eficiência, suporte técnico confiável e foco em alta performance operacional.
    </div>
</div>
<div class="galeria"></div>
<div class="meu-container">
  <div class="text-container" style="font-size:1.4rem; text-align:center;">
    <span class="frase1">Esta é a primeira frase</span>.
    <span class="frase2"> Aqui vai a segunda frase</span>.
    <span class="frase3"> Mais uma terceira frase</span>.
    <span class="frase4"> Finalmente a quarta frase</span>.
  </div>

  <div class="images-container">
    <img src="https://via.placeholder.com/150x192.png?text=Imagem+1" alt="Imagem 1" class="img-small" />
    <img src="https://via.placeholder.com/327x192.png?text=Imagem+Grande" alt="Imagem Grande" class="img-large" />
    <img src="https://via.placeholder.com/150x192.png?text=Imagem+2" alt="Imagem 2" class="img-small" />
  </div>
</div>


<script>
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
</script>


</body>
</html>
