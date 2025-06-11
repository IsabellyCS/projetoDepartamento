<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    
    <link href="img/icone.png" rel="shortcut icon" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/header1.css">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Augebit</title>
    <style>
        
@font-face {
    font-family: 'Poppins';
    src: url(../estilo/Fontes/Poppins-Regular.ttf);
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

.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;

}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}

.account-wall {
    margin-top: 20px;
    width: 426px;
    height: 497px;
    border-radius: 25px;
    padding: 40px 0px 20px 0px;
    background-color: #E9E9E9;
    margin: 0 auto;
    margin-top:30px;
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 200px;
    height: 160px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}

.row {
    width: 100%;
    display: flex;
    flex-direction: row;
}

.bg-light {
    background-image: url(./imgs/login_background.png);
    background-repeat: no-repeat;
    background-size: 100%;
}

.wall1 {
    margin-left: 220px;
    z-index: 2;
    width: 426px;
    height: 497px;
}

.wall2 {
    margin-top: -460px;
    margin-left: 570px;
    width: 489px;
    height: 531px;
    background-image: url(./imgs/frame_3.png);
    z-index: 1;

}

.titulo1 {
    font-family: 'Poppins';
    font-size: 32px;
    color: black;
    margin-left: 50px;
    margin-bottom: 30px;
}

.form-control_mb-1 {
    width: 319px;
    height: 45px;
    background-color: transparent;
     background-image: url(./imgs/cpf_icon.png);
    background-position: 4px;
    background-repeat: no-repeat;
    font-family: 'Poppins';
    font-size: 16px;
    color: #808080;
    padding-left: 50px;
    border: 1.5px solid black;
    border-radius: 25px;
    box-shadow: 0px 5px 5px #c2c2c2;
    margin-bottom: 20px;
}

.form-control_mb-2a {
    width: 319px;
    height: 45px; /* importante */
    background-image: url(./imgs/email_icon.png);
    background-position: 10px center; /* centralizar verticalmente */
    background-repeat: no-repeat;
    border-radius: 25px;
    border: 1.5px solid black;
    box-shadow: 0px 5px 5px #c2c2c2;
    margin-bottom: 20px;
    background-color: transparent;
    padding-left: 50px; /* para o texto não sobrepor o ícone */
}


.form-control_mb-2,
.form-control_mb-2:focus,
.form-control_mb-2:valid {
    background-color: transparent;
    width: 319px;
    height: 45px;
    display: table-cell;
    font-family: 'Poppins';
    font-size: 16px;
    color: #808080;
    padding-left: 50px;
    border: 1.5px solid black;
    border-radius: 25px;
    box-shadow: 0px 5px 5px #c2c2c2;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

.form-control {
    width: 319px;
    height: 45px;
    background-color: transparent;
    background-image: url(./imgs/senha_icon.png);
    background-position: 9px;
    background-repeat: no-repeat;
    font-family: 'Poppins';
    font-size: 16px;
    color: #808080;
    padding-left: 50px;
    border: 1.5px solid black;
    border-radius: 25px;
    box-shadow: 0px 5px 5px #c2c2c2;
    margin-bottom: 20px;
}

.texto {
    display: flex;
    height: 20px;
    line-height: 20px;
    flex-direction: row;
    margin-bottom: 5px;
    margin-top: 8px;
}

.subtexto {
    font-family: 'Poppins';
    font-size: 14px;
    margin-right: 4px;
}

a {
    font-family: 'Poppins';
    font-size: 14px;
    color: #7384D0;
}

.captcha {
    width: 244px;
    height: 59px;
     background-image: url(./imgs/Captcha.png);
    margin-top: 10px;
    margin-left: 25px;
}

.iso {
    margin-left: 20px;
    margin-top: 24px;
}

.titulo2 {
    font-family: 'Poppins';
    color: white;
    width: 280px;
    font-size: 32px;
    margin-left: 100px;
    margin-top: 105px;
}

.btn_btn-primary {
    font-family: 'Poppins';
    font-size: 18px;
    color: white;
    background-color: #4500FF;
    width: 180px;
    height: 46px;
    border: 2.5px solid white;
    border-radius: 30px;
    margin-left: 170px;
    margin-top: 32px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn_btn-primary:hover {
    color: #4500FF;
    background-color: white;
    border: 2.5px solid #4500FF;
}

/* The container must be positioned relative: */
.custom-select {
  margin-top: 65px;
  margin-left: 100px;
  position: relative;
  font-family: 'Poppins';
  border: 3px solid white;
  border-radius: 20px;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: #4500FF;
  border-radius: 20px;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  background-color: #4500FF;
  padding: 8px 16px;
  border: px solid white;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.container {
    margin-top: 75px;
}
.icon {
    position: absolute;
    width: 20px;
    height: 20px;
    margin-left: -20px;
}
.form-control_mb-2 {
    position: relative;
    display: flex;
    align-items: center;
    background-color: transparent;
    width: 319px;
    height: 46px;
    font-family: 'Poppins';
    font-size: 16px;
    color: #808080;
    border: 1.5px solid black;
    border-radius: 25px;
    box-shadow: 0px 5px 5px #c2c2c2;
    margin-bottom: 20px;
    padding-left: 37px;
}
.form-control_mb-2 input {
    border: none;
    background-color: transparent;
    outline: none;
    font-family: 'Poppins';
    font-size: 16px;
    width: 100%;
    height: 100%;
    padding-left: 10px;
    color: #808080;
}
.estranho {
    width: 18px;
}

    </style>
</head>
<body class="bg-light">

<?php include_once('../estilo/headerAzul.php'); ?>

<div class="container">
    <div class="row">
        <div class="wall1">
            <br><br><br><br>
            <div class="account-wall">
                <form id="cadastroForm" class="form-signin" method="post" action="salvar-cadastro.php">
                    <p class="titulo1">CADASTRE-SE</p>
                    <div class="form-control_mb-2">
                        <img src="imgs/cpf_icon.png" alt="" class="icon">
                        <input type="text" name="cpf" placeholder="insira seu CPF" required>
                    </div>

                    <div class="form-control_mb-2">
                        <img src="imgs/email_icon.png" alt="" class="icon">
                        <input type="email" name="email" placeholder="inserir seu Email" required>
                    </div>

                    <div class="form-control_mb-2">
                        <img src="imgs/senha_icon.png" alt="" class="icon estranho">
                        <input type="password" name="senha" placeholder="inserir sua Senha" required>
                    </div>


                    <div class="d-grid gap-2 mt-2">
                        <div class="texto">
                            <input type="checkbox" id="termos" required>
                            <p class="subtexto">Eu concordo com os</p>
                            <a href="https://youtu.be/dQw4w9WgXcQ?si=kCa7HNSa0xfoG8Oi" target="_blank" rel="noopener noreferrer">Termos de Serviço</a>
                        </div>
                        <div class="captcha">
                            <input type="checkbox" class="iso" id="captcha" required>
                        </div>
                    </div>
                
            </div>
        </div>

        <div class="wall2">
            <p class="titulo2">Bem-vindo a AUGEBIT</p>
            <div class="custom-select" style="width:325px">
                <select name="cargo" id="selecao_cargo">
                    <option value="Serviços de Treinamentos Industriais">Serviços de Treinamentos Industriais</option>
                    <option value="Serviços de Projetos Industriais">Serviços de Projetos Industriais</option>
                    <option value="Departamento de Recursos Humanos">Departamento de Recursos Humanos</option>
                    <option value="Departamento de Suprimentos">Departamento de Suprimentos</option>
                </select>
            </div>
            <button id="btnCadastrar" class="btn_btn-primary" type="submit">CADASTRE-SE</button>
            </form>
        </div>
    </div>
</div>

<script src="cadastro.js"></script>

</body>

</html>