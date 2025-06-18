<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    
    <link href="img/icone.png" rel="shortcut icon" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Augebit</title>
</head>
<style>
    @font-face {
            font-family: 'Poppins';
            src: url(../estilo/Fontes/Poppins-Regular.ttf);
        }
    * {
        font-family: 'Poppins';

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
            /* modo azul */
            header .botao1 {
            background-color: #5C00FF;
            color: white;
            border: none;
            }

            header .botao1:hover {
            background-color: transparent;
            color: #5C00FF;
            border: 3px solid #5C00FF;
            }

            header .botao2 {
            background-color: transparent;
            color: #5C00FF;
            border: 3px solid #5C00FF;
            }

            header .botao2:hover {
            background-color: #5C00FF;
            color: white;
            }

        
        @font-face {
            font-family: 'Poppins';
            src: url(./Fontes/Poppins-Regular.ttf);
        }

.fundo {
    width: 100%;
    height: 100%;
    background-color: #0D0D0F;
    margin: 0;
    padding: 0;
}

.banner {
    width: 100%;
    height: 500px;
    align-content: center;
    text-align: center;
    margin-bottom: 30px;
    display: flex;
}

.produtos {
    width: 100%;
    margin-top: -50px;
    height: 600px;
}

.title {
    position: absolute;
    color: white;
    font-family: 'Poppins';
    font-size: 33px;
    margin-top: 175px;
    font-weight: bold;
    margin-left: 150px;
}

.subtitle {
    position: absolute;
    margin-left: 150px;
    color: white;
    font-size: 27px;
    font-family: 'Poppins';
    margin-top: 220px;
    width: 520px;
    font-weight: 100;
    text-align: left;
}

.colunas {
    width: 100%;
    display: flex;
    flex-direction: row;
    margin-top: -40px;
}

.coluna1 {
    width: 25%;
    position: sticky;
    top: 0;
    background-color: black;
    height: fit-content; /* ou remova o height se não for necessário */
    align-self: flex-start; /* Garante que o sticky funcione em flexbox */
    z-index: 10; /* opcional: ajuda a ficar acima de outras seções */
}
.coluna2 {
     width: 75%; /* em vez de 100% */
    padding: 60px 20px 0 40px; /* ajuste se necessário */
    background-color: white;
    border-top-right-radius: 50px;
    height: 120%;
    
}

.logo_name {
    height: 45px;
}

.name {
    font-size: 36px;
    color: white;
    margin-left: 10px;
}

.nome {
    display: flex;
    flex-direction: row;
    margin-top: 75px;
    padding-left: 40px;
    height: 90px;
    border-bottom: 2.5px solid #4747D9;
    margin-bottom: 5px;
    height: 55px;
}

.icone {
    width: 60px;
    height: 60px;
}

.categoria {
    padding-left: 25px;
    padding-top: 10px;
    width: 98%;
    height: 90px;
    display: flex;
    flex-direction: row;
    margin-bottom: 7px;
    border-radius: 25px;
    margin-left: 3px;
    cursor: pointer;
  transition: border 0.3s, background-color 0.3s;
}
.categoria:hover {
    border: 1px solid white;
    background-color: rgba(255, 255, 255, 0.05); /* opcional: destaque leve */
    }

.category {
    font-family: 'Poppins';
    color: white;
    font-size: 26px;
    margin-left: 14px;
    line-height: 25px;
    height: 60px;
    align-content: center;
}



.titulo {
    font-size: 40px;
    color: black;
    margin-bottom: 40px;
}

.novidades {
    margin-top: -20px;
    width: 100%;
    height: 535px;
    background-color: transparent;
    display: flex;
    flex-direction: row;
    margin-bottom: 15px;
}

.linha {
    display: flex;
    flex-direction: row;
}

a {
    margin-left: 5px;
}

.add {
    width: 75px;
    margin-left: -6px;
    margin-top: -6px;
}

.adicionar {
    width: 62px;
    height: 62px;
    background-color: white;
    border-radius: 110px;
    justify-content: center;
    align-content: center;
    position: absolute;
}

.conteudo {
    border: 2.5px solid black;
    width: 350px;
    height: 520px;
    margin-top: 15px;
    margin-left: 15px;
    background-color: transparent;
    border-radius: 30px;
    margin-right: 20px;
}


.nome-prod {
    font-size: 21px;
    color: black;
    width: 300px;
    margin-left: 10px;
    font-weight: bold;
}

.sub-prod {
    font-size: 18px;
    color: #404245;
    width: 300px;
    margin-left: 10px;
    margin-top: -5px;
}

.banner2 {
    margin-top: 7px;
    width: 320px;
    height: 360px;
    margin-left: 13px;
    margin-bottom: 10px;
}

.categorias {
    width: 100%;
    height: 200px;
    display: flex;
    flex-direction: row;
    padding-right: 100px;
    justify-content: space-between;
    margin-bottom: 40px;
}

.nomes {
    margin-top: 20px;
    width: 100%;
    display: flex;
    flex-direction: row;
}

.titulo3 {
    font-size: 40px;
    color: black;
    margin-bottom: 40px;
    margin-right: 600px;
}

.cat {
    justify-content: center;
    text-align: center;
}

.esquerda {
    width: 50px;
    height: 50px;
    background-color: #A2A2EB;
    border: transparent;
    border-radius: 10px;
    font-size: 35px;
    color: white;
    margin-right: 20px;
}

.direita {
    width: 50px;
    height: 50px;
    background-color: #4747D9;
    border: transparent;
    border-radius: 10px;
    font-size: 35px;
    color: white;
    margin-right: 20px;
}

.bt_icon {
    width: 80px;
}

.botao {
    background-color: #D1D1F5;
    width: 130px;
    height: 130px;
    justify-content: center;
    align-content: center;
    border-radius: 100px;
}

.cat-title {
    font-size: 19px;
    margin-top: 5px;
    width: 130px;
    color: black;
    font-weight: 600;
}
/* container da sessão */
.linha-cards {
  display: flex;
  gap: 20px;
  padding: 20px;
  overflow-x: auto; /* mantém a rolagem possível */
  scroll-behavior: smooth;
  scrollbar-width: none; /* Firefox: oculta scrollbar */
}

/* Oculta scrollbar no Chrome, Edge, Safari */
.linha-cards::-webkit-scrollbar {
  display: none;
}



/* Card padrão */
.conteudo_b {
  flex: 0 0 auto;
  width: 350px;
  height: 460px;
  border: 2.5px solid black;
  background-color: white;
  border-radius: 30px;
  overflow: hidden;
  transition: transform 0.3s ease;
}

.conteudo_b:hover {
  transform: scale(1.03);
}

/* Botões de scroll */
.sessao .esquerda,
.sessao .direita {
  background-color: #000;
  color: white;
  border: none;
  font-size: 20px;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  cursor: pointer;
  transition: background 0.3s;
}

.sessao .esquerda:hover,
.sessao .direita:hover {
  background-color: #444;
}


</style>
<body>
    <div class="fundo">
        <?php include_once('../estilo/headerAzul.php'); ?>
        <div class="banner">
            <img src="../estilo/imgs/BannerProdutosMelhor (3).png" alt="" class="produtos">
            <p class="title">Tecnologia hightech para você</p>
            <p class="subtitle">Peça os suprimentos de informática que você precisa.</p>
        </div>
        <div class="colunas">
            <div class="coluna1">
                <div class="nome">
                    <img src="../estilo/imgs/logo_pequena.png" alt="" class="logo_name">
                    <p class="name">AUGEBIT</p>
                </div>
                <div class="categoria">
                    <img src="../estilo/imgs/mouse.png" alt="" class="icone">
                    <p class="category">Periféricos</p>
                </div>
                <div class="categoria">
                    <img src="../estilo/imgs/computer.png" alt="" class="icone">
                    <p class="category">Equipamentos</p>
                </div>
                <div class="categoria">
                    <img src="../estilo/imgs/cabos.png" alt="" class="icone">
                    <p class="category">Cabos e conectividade</p>
                </div>
                <div class="categoria">
                    <img src="../estilo/imgs/impressora.png" alt="" class="icone">
                    <p class="category">Impressão e digitalização</p>
                </div>
                <div class="categoria">
                    <img src="../estilo/imgs/usb.png" alt="" class="icone">
                    <p class="category">Manutenção e peças</p>
                </div>
                <div class="categoria">
                    <img src="../estilo/imgs/pedidos.png" alt="" class="icone">
                    <p class="category">Meus pedidos</p>
                </div>
            </div>
            <div class="coluna2">
                <p class="titulo">Procure por categorias</p>
                <div class="categorias">
                    <div class="cat">
                        <div class="botao">
                            <img src="../estilo/imgs/mouse_azul.png" alt="" class="bt_icon">
                        </div>
                        <p class="cat-title">Periféricos</p>
                    </div>
                    <div class="cat">
                        <div class="botao">
                            <img src="../estilo/imgs/impressora_azul.png" alt="" class="bt_icon">
                        </div>
                        <p class="cat-title">Equipamentos</p>
                    </div>
                    <div class="cat">
                        <div class="botao">
                            <img src="../estilo/imgs/cabos_azul.png" alt="" class="bt_icon">
                        </div>
                        <p class="cat-title">Cabos e conectividade</p>
                    </div>
                    <div class="cat">
                        <div class="botao">
                            <img src="../estilo/imgs/impressora_azul.png" alt="" class="bt_icon">
                        </div>
                        <p class="cat-title">Impressão e digitalização</p>
                    </div>
                    <div class="cat">
                        <div class="botao">
                            <img src="../estilo/imgs/usb_azul.png" alt="" class="bt_icon">
                        </div>
                        <p class="cat-title">Manutenção e peças</p>
                    </div>
                </div>
                <p class="titulo">Confira as novidades</p>
                <div class="novidades">
                    <div class="produto">
                        <div class="adicionar">
                            <img src="../estilo/imgs/adicionar_icon.png" alt="" class="add">
                        </div>
                        <div class="conteudo">
                            <img src="../estilo/imgs/teclado.png" alt="" class="banner2">
                            <p class="nome-prod">Teclado Mecânico de Baixo Ruído</p>
                            <p class="sub-prod">Digitação com menos barulho no ambiente</p>
                        </div>
                    </div>
                    <div class="produto">
                        <div class="adicionar">
                            <img src="../estilo/imgs/adicionar_icon.png" alt="" class="add">
                        </div>
                        <div class="conteudo">
                            <img src="../estilo/imgs/teclado.png" alt="" class="banner2">
                            <p class="nome-prod">Teclado Mecânico de Baixo Ruído</p>
                            <p class="sub-prod">Digitação com menos barulho no ambiente</p>
                        </div>
                    </div>
                </div>
                <div class="linha">
                    <p class="texto">Gostou? Veja mais</p>
                    <a href="">aqui</a>
                </div>
                <div class="sessao">
                    <div class="nomes">
                        <p class="titulo3">Periféricos</p>
                        <button class="esquerda"><</button>
                        <button class="direita">></button>
                    </div>
                    <div class="perifericos linha-cards">
                        <!-- Cards são inseridos aqui -->
                        <?php include 'listar_cards.php'; exibirCardsPorTipo("Periféricos"); ?>
                    </div>
                    </div>
                <div class="sessao">
                    <div class="nomes">
                        <p class="titulo3">Equipamentos</p>
                        <button class="esquerda"><</button>
                        <button class="direita">></button>
                    </div>
                    <div class="equipamentos linha-cards">
                        <!-- Cards são inseridos aqui -->
                        <?php include 'listar_cards.php'; exibirCardsPorTipo("Equipamentos"); ?>
                    </div>
                    </div>
                <div class="sessao">
                    <div class="nomes">
                        <p class="titulo3">Cabos e conectividade</p>
                        <button class="esquerda"><</button>
                        <button class="direita">></button>
                    </div>
                    <div class="cabos linha-cards">
                        <!-- Cards são inseridos aqui -->
                        <?php include 'listar_cards.php'; exibirCardsPorTipo("Cabos e conectividade"); ?>
                    </div>
                    </div>
                <div class="sessao">
                    <div class="nomes">
                        <p class="titulo3">Impressão e digitalização</p>
                        <button class="esquerda"><</button>
                        <button class="direita">></button>
                    </div>
                    <div class="impressao linha-cards">
                        <!-- Cards são inseridos aqui -->
                        <?php include 'listar_cards.php'; exibirCardsPorTipo("Impressão e digitalização"); ?>
                    </div>
                    </div>
                <div class="sessao">
                    <div class="nomes">
                        <p class="titulo3">Manutenção e peças</p>
                        <button class="esquerda"><</button>
                        <button class="direita">></button>
                    </div>
                    <div class="manutencao linha-cards">
                        <!-- Cards são inseridos aqui -->
                        <?php include 'listar_cards.php'; exibirCardsPorTipo("Manutenção e peças"); ?>
                    </div>
                    </div>





            </div>
        </div>
    </div>
    <script>
document.querySelectorAll(".sessao").forEach(sessao => {
  const container = sessao.querySelector(".linha-cards");
  sessao.querySelector(".direita").onclick = () => container.scrollBy({ left: 300, behavior: 'smooth' });
  sessao.querySelector(".esquerda").onclick = () => container.scrollBy({ left: -300, behavior: 'smooth' });
});

document.querySelectorAll(".sessao").forEach(sessao => {
  const container = sessao.querySelector(".linha-cards");
  const btnLeft = sessao.querySelector(".esquerda");
  const btnRight = sessao.querySelector(".direita");

  btnRight.addEventListener("click", () => {
    container.scrollBy({ left: 400, behavior: 'smooth' });
  });

  btnLeft.addEventListener("click", () => {
    container.scrollBy({ left: -400, behavior: 'smooth' });
  });
});

</script>

</body>

</html>