
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    
    <link href="img/icone.png" rel="shortcut icon" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link href="css/estilo-login.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header1.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>contato</title>
</head>
<body>
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
            flex-direction: row;
            justify-content: space-between;
        
        }
        .secao {
            max-width: 210px;
            text-align: center;
            align-items: center;
            border-top: 1px solid black; 
            border-right: 1px solid black; 
            border-left: 1px solid black; 
            border-radius: 10px;
            background-color: white;
        }
        .conteudo {
            background-color: white;
            border-radius: 10px;
            border: 1px solid black; 
            height: 1000px;
            margin-top: -10px;
            position: absolute;
            width: 85%;
        }
        .contato {
            margin: 30px;
            width: 250px;
            height: 350px;
            border-radius: 20px;
            background-color: blue;
        }
        .top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            display: flex;
            flex-direction: row;
            background-color: #B86BFF;
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

    </style>

<?php include_once('../estilo/headerAzul.php'); ?>

<h6 class="title">Feedbacks dos Funcionário</h6>

<div class="container">
    <div class="row">
        <button class="secao">
            <p>Últimos</p>
        </button>
        <button class="secao">
            <p>Últimos</p>
        </button>
        <button class="secao">
            <p>Últimos</p>
        </button>
        <button class="secao">
            <p>Últimos</p>
        </button>
    </div>
    <div class="conteudo">
        <div class="contato">
            <div class="top">
                <div class="perfil">
                    <img src="../estilo/imgs/logoRodape.png" alt="">
                </div>
                <div class="info">
                    <p class="nome">carla</p>
                    <p class="email">carla@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>







</body>
</html>