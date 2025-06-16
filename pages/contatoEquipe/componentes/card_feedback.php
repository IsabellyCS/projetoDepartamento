<?php
function exibirCardFeedback($f) {
    // Define imagem de acordo com o setor
    $iconesSetor = [
        'Departamento de Recursos Humanos' => '../estilo/imgs/SetorRH.png',
        'Serviços de Projetos Industriais' => '../estilo/imgs/SetorPI.png',
        'Departamento de Suprmentos' => '../estilo/imgs/SetorDDS.png',
        'Serviços de Treinamentos Industriais' => '../estilo/imgs/SetorTI.png'
    ];
    $imgSrc = isset($iconesSetor[$f['setor']]) ? $iconesSetor[$f['setor']] : '../estilo/imgs/SetorDDS.png';
            $dadosModal = base64_encode(json_encode([
                "id" => $f["id"],
                "nome" => $f["nome"],
                "email" => $f["email"],
                "mensagem" => $f["mensagem"],
                "id_pedido" => $f["id_pedido"],
                "data_envio" => $f["data"],
                "setor" => $f["setor"]  // importante para a imagem do modal
            ]));




?>
    <div class="card-feedback">
        <div class="cabecalho">
            <div class="icone">
                <img src="<?php echo $imgSrc; ?>" alt="Ícone setor">
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
            
                <button class="responder" onclick="abrirModalFromBase64('<?php echo $dadosModal; ?>')">Responder</button>





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
            background-color: rgb(84, 149, 213);
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin: 15px 15px 5px 5px;
            overflow: hidden; /* Garante que a imagem não ultrapasse */
        }

        .icone img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            display: block;
        }


        .cabecalho {
            padding: 10px;
            height: 70px;
            width: 100%;
            background: #B86BFF;
            width: 330px;
            display: flex;
            flex-direction: row;
            border-top-right-radius: 20px; 
            border-top-left-radius: 20px;
            border-bottom: 1px solid rgb(0, 0, 0);
        }
        .content {
            width: 100%;
            flex: 1;
        }
        .status {
            margin: 10px 10px 0 230px;
           border: 1px solid #E200FF;
           color: #E200FF;
           padding: 5px 15px;
           border-radius: 10px;
           width: 70px;
        }
        .card-feedback {
            width: calc((85% - 40px) / 3); /* 3 por linha com 20px de gap entre */
            box-sizing: border-box;
            background: white;
            border-radius: 30px;
            border: 1px solid black;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .corpo p {
            margin: 10px 16px 25px;

        }
        .rodape {
            display: flex;
            justify-content: space-between;
            margin: 10px 20px;
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
        .responder:hover {
            transition: ease 0.3s;
            box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
            background-color:rgb(161, 100, 218);
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
            position: relative;
            height: 110px;
            overflow: hidden;
        }

        .textin::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            height: 40px;
            width: 100%;
            background: linear-gradient(to bottom, rgba(255,255,255,0), white 90%);
        }
        /* Garante o corte com "..." dentro do parágrafo */
        .textin p {
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }


    </style>
    <?php
}
?>
