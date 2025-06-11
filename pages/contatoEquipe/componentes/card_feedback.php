<?php
function exibirCardFeedback($f) {
?>
    <div class="card-feedback">
        <div class="cabecalho">
            <div class="icone">
                <img src="../estilo/imgs/SetorRH.png" alt="Ícone setor">
            </div>
            <div class="info-usuario">
                <strong style="font-size: 16px;"><?php echo htmlspecialchars($f['nome']); ?></strong><br>
                <span style="font-size: 13px; color: #fff;"><?php echo htmlspecialchars($f['setor']); ?></span>
            </div>
           
        </div>

        <div class="content">
            <div class="corpo">
             <div class="status">
                <span class="<?php echo $f['resposta'] ? 'lida' : 'nao-lida'; ?>">
                    <?php echo $f['resposta'] ? 'Lida' : 'Não lida'; ?>
                </span>
            </div>
            <div class="textin">
                <p><?php echo nl2br(htmlspecialchars($f['mensagem'])); ?>
            </p></div>
            
        </div>

        <div class="rodape">
            <div class="detalhe">
                <img src="../estilo/imgs/IconCalendario.png" alt="">
                <span class="data">
                    <i class="fa-regular fa-calendar"></i>
                    <?php echo date('d/m/Y', strtotime($f['data'])); ?>
                </span>
            </div>
            
                <button class="responder">Responder</button>
            </div>
        </div>



    </div>
    <style>
        * {
            font-family: 'Poppins';
            src: url(.../estilo/Fontes/Poppins-Regular.ttf);
        }
        @font-face {
            font-family: 'Poppins';
            src: url(../estilo/Fontes/Poppins-Regular.ttf);
        }
        .icone {
            background-color:rgb(84, 149, 213);
            width: 90px;
            height: 90px;
            border-radius: 50px;
            objects-fit: cover;
            margin: 15px 15px 5px 5px;
        }
        .cabecalho {
            padding: 10px;
            height: 80px;
            width: 700px;
            background: #B86BFF;
            width: 330px;
            display: flex;
            flex-direction: row;
            border-top-right-radius: 50px; 
            border-top-left-radius: 50px;
            border-bottom: 1px solid rgb(0, 0, 0);
        }
        .status {
           margin-left: 240px;
           border: 1px solid #E200FF;
           color: #E200FF;
           padding: 5px 15px;
           border-radius: 10px;
           margin-right: 10px;
        }
        .content {
            padding: 20px 0;
            height: 100%;
            width: 350px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
            border: 1px solid black;
        }
        .corpo p {
            margin: 10px 16px 25px;

        }
        .rodape {
            display: flex;
            justify-content: space-between;
            margin: 0 20px;
        }
        .responder {
            background: #B86BFF;
            border-radius: 20px;
            color: white;
            padding: 8px 15px;
            font-size: 15px;
            cursor: pointer;
            border: none;
        }
        .detalhe {
            display: flex;
            flex-direction: row;
        }
        .detalhe img {
            width: 30px;
            height: 30px;
            text-align:  center;
            align-items: center;
            padding: 2px;
        }
        .data {
            font-size: 16px;
            padding: 5px;
        }
        .textin {
            height: 110px;
        }
    </style>
    <?php
}
?>
