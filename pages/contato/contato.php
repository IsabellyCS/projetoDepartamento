<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    
    <link href="img/icone.png" rel="shortcut icon" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Augebit</title>
    <style>
        * {
            font-family: 'Poppins';
            src: url(../estilo/Fontes/Poppins-Regular.ttf);
        }
        body {
            overflow-x: hidden
        }
        @font-face {
            font-family: 'Eurostile';
            src: url('../estilo/Fontes/orbitron-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
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


        
        .row {
            width: 100%;
            display: flex;
            flex-direction: row;
            margin-top: 15%;
            margin-bottom: 10%;

        }

        .esquerda {
            width: 50%;
        }

        .direita {
            width: 50%;
        }

        .t1 {
            font-family: 'Eurostile', sans-serif;
            font-size: 66px;
            color: black;
            margin-left: 110px;
            margin-bottom: 5px;
        }

        .t2 {
            font-family: 'Eurostile', sans-serif;
            letter-spacing: 5px;
            font-size: 30px;
            color: black;
            margin-left: 110px;
        }

        .icon {
            width: 35px;
            border: 2px solid black;
            border-radius: 5px;
            margin-right: 10px;
        }
        .estranho {
            padding: 2px;
        }

        .coisos {
            width: 722px;
            justify-content: center;
        }

        input {
            width: 660px;
            font-family: 'Poppins';
            font-size: 25px;
            color: #5B5B5B;
            border: transparent;
            outline: none;
        }

        input:focus,
        input::selection {
            outline: none;
            border: none;
        }

        .btn_btn-primary {
            font-family: 'Poppins';
            font-size: 18px;
            color: black;
            background-color: white;
            width: 180px;
            height: 46px;
            border: 2.5px solid black;
            border-radius: 30px;
            margin: 32px 35% 0;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn_btn-primary:hover {
            color: black;
            background-color: white;
            border: 2px solid bLack;
        }
        .pergunta-container {
        position: relative;
        width: 722px;
        }

        .icon.fixo {
        position: absolute;
        top: 0;
        left: 0;
        width: 35px;
        border: 2px solid black;
        border-radius: 5px;
        margin: 0;
        }

        textarea.pergunta {
        width: 660px;
        min-height: 50px;
        font-family: 'Poppins';
        font-size: 25px;
        color: #5B5B5B;
        border: none;
        outline: none;
        resize: none;
        overflow: hidden;
        line-height: 1.4;
        padding-left: 50px; /* espaço para o ícone */
        padding-top: 2px;
        padding-bottom: 2px;
        box-sizing: border-box;
        display: block;
        }
        .btn_btn-primary {
            transition: all 0.3s ease;
            min-width: 120px;
            padding: 10px 20px;
            background-color: #000; /* cor original */
            color: white;
            border: none;
            border-radius: 20px; /* valor padrão, será alterado via JS */
            cursor: pointer;
        }





    </style>
</head>
<body> 

<?php include_once('../estilo/headerAzul.php'); ?>


<section class="tudo" data-theme="light">
<div class="row">
    <div class="esquerda">
        <p class="t1">Tem Alguma Pergunta?</p>
        <p class="t2">Contate-nos</p>
    </div>
    <div class="direita">
        <form action="salvar_contato.php" method="POST" id="form-contato">
        <div class="coisos">
            <img src="./imgs/user_icon.png" alt="" class="icon">
            <input type="text" name="nome" placeholder="Nome" required>
            <hr>
        </div>
        <div class="coisos">
            <img src="./imgs/email2_icon.png" alt="" class="icon">
            <input type="email" name="email" placeholder="Email" required>
            <hr>
        </div>
        <div class="coisos pergunta-container">
            <img src="./imgs/question_icon.png" alt="" class="icon fixo">
            <textarea class="pergunta" name="mensagem" placeholder="Faça uma Pergunta" required></textarea>
            <hr>
        </div>
        <div class="coisos">
            <img src="./imgs/id_icon.png" alt="" class="icon estranho">
            <input type="text" name="id_pedido" placeholder="Adicionar ID de Pedido Específico">
            <hr>
        </div>
        <button type="submit" class="btn_btn-primary">Enviar</button>
    </div>
    </form>
</div>
</section>
<?php
$footer = file_get_contents('../estilo/footer.html');
echo $footer;
?>




<script>
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
</script>
<script src="contato.js"></script>
</body>
</html>