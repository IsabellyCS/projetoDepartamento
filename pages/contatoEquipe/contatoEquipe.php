<?php include_once('./conexao.php'); ?>
<?php include_once('./componentes/card_feedback.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="css/estilo-login.css">
    <link rel="stylesheet" href="css/header1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        * {
            font-family: 'Poppins';
            src: url(../estilo/Fontes/Poppins-Regular.ttf);
        }
        body {
            display: flex;
            justify-content: center;
            flex-direction: column;
            font-family: 'Poppins';
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

    .title {
        font-size: 30px;
        margin-top: 180px;
        text-align: center;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .secao {
            max-width: 210px;
            width: 100%;
            text-align: center;
            border: 1px solid black;
            border-bottom: none;
            border-radius: 10px 10px 0 0;
            background-color: white;
            margin: 0 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0.5;
        }

        .secao.ativa {
            font-weight: bold;
            opacity: 1;
        }

        .conteudo {
            background-color: white;
            border-radius: 20px;
            border: 1px solid black;
            height: auto;
            min-height: 600px;
            width: 85%;
            margin: 0 auto;
            margin-top: -1px;
            position: relative;
            z-index: 0;
            padding: 20px;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            gap: 16px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.ativa {
            display: block;
        }

        .cards {
            margin-left: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 80px;
            justify-content: flex-start;
            width: 100%;
        }

        .perfil {
            border-radius: 35px;
            border: 1px solid black;
            margin-left: 5px;
            width: 70px;
            height: 70px;
            justify-content: center;
            text-align: center;
            padding: 5px;
        }
        .perfil img {
            width: 55px;
            height: 55px;
        }
        .card-feedback {
            width: calc((85% - 40px) / 3); /* 3 por linha com 2 gaps de 20px */
            box-sizing: border-box;
        }



    </style>
</head>
<body>

<?php include_once('../estilo/headerAzul.php'); ?>



<h6 class="title">Feedbacks dos Funcionários</h6>

<div class="container">
    <div class="row">
        <button class="secao ativa" data-tab="ultimos"><p>Últimos</p></button>
        <button class="secao" data-tab="nao-respondidas"><p>Não Respondidas</p></button>
        <button class="secao" data-tab="respondidas"><p>Respondidas</p></button>
        <button class="secao" data-tab="por-id"><p>ID do Pedido</p></button>
    </div>

    <div class="conteudo">
        <div class="tab-content ativa" id="ultimos"><?php include 'feedbacks_ultimos.php'; ?></div>
        <div class="tab-content" id="nao-respondidas"><?php include 'feedbacks_nao.php'; ?></div>
        <div class="tab-content" id="respondidas"><?php include 'feedbacks_respondidas.php'; ?></div>
        <div class="tab-content" id="por-id"><?php include 'feedbacks_id.php'; ?></div>
    </div>
</div>


<?php include './componentes/modal_feedback.php'; ?>
<script src="contatoEquipe.js"></script>

</body>
</html>

