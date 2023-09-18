<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    
    <title>Inscrição Confirmada - Vestibular Unifeso 2024</title>

    <style>

        body,
        html {
        font-family: "Muli", sans-serif;
        margin: 0;
        padding: 0;
        height: 100vh;
        background-image: url(/Backend/public_html/assets/images/fundo-workspace.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: column;
        position: relative;
        }

        header {
        background-color: #127e71;
        color: #ffffff;
        text-align: center;
        padding: 20px 0;
        }

        h1 {
        font-size: 36px;
        color: #444444
        }

        section {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        text-align: center;
        }

        p,
        li {
        font-size: 18px;
        line-height: 1.6;
        color: #333333;
        list-style-type: none;
        text-align: justify;
        margin: 10px;
        }

        .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #127e71;
        color: #ffffff;
        text-decoration: none;
        margin-top: 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
        cursor: pointer;
        margin: 10px;
        }

        .btn:hover {
        background-color: #cccccc;
        }

        .container {
        display: flex;
        flex: 1;
        margin: 0;
        padding:0;
        flex-direction: column;
        align-items: center;
        justify-content: end;
        position: relative;
        }

        .overlay {
            display: flex;
            background-color: rgba(18, 126, 113, 0.7);
            position: absolute;
            top: 0;
            left:0;
            width: 100%;
            height: 100%;
        }

        .content {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        }

        .image-container {
            display: flex;
            flex-basis:0;
            flex-shrink: 1;
            padding:0;
        }

        .image {
            width: 850px;
            height: auto;
            margin:0;
        }

        .information-container {
            flex-basis:0;
            flex-grow: 1;
            background-color: #ffffff;
            border-radius: 10px;
            margin-left: 30px;
            margin-right: 30px;
            pading: 15px;
        }


    </style>


</head>

<body>
    <div class="overlay"></div>
    <section class="container" >
        
        <div class="content" >
            <div class="image-container">
                <img src="/Backend/public_html/assets/images/nice-guy.png" alt="Imagem de Marketing" class="image" />
            </div>
            <div class="information-container">
                <h1>Tudo pronto!</h1>
                <p>Obrigado, <?php echo $nome; ?>, por se inscrever no Vestibular Unifeso 2024!
                Registramos suas informações em nosso banco de dados e entraremos em contato assim que possível
                Aqui estão os detalhes da sua inscrição:</p>
                <ul>
                    <li><strong>Nome Completo:</strong> <?php echo $nome; ?></li>
                    <li><strong>E-mail:</strong> <?php echo $email; ?></li>
                    <li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
                    <li><strong>Curso de Interesse:</strong> <?php echo $curso; ?></li>
                    <li><strong>Mensagem (opcional):</strong> <?php echo $mensagem; ?></li>
                </ul>
                <a href="http://uddemonstration.rf.gd/Backend/public_html/?page=inscritos" class="btn">Verificar Inscrição</a>
            </div>
        </div>
                    
    </section>
    <script src="./assets/js/main.js"></script>
</body>

</html>