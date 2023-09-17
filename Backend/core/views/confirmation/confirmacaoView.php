<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/Backend/public_html/assets/css/confirmation.css">
    <title>Inscrição Confirmada - Vestibular Unifeso 2024</title>



</head>

<body>
    <section class="container">
        <h2>Confirmação de Inscrição</h2>
        <div class="content">
            <div class="">
                <img src="/Backend/public_html/assets/images/nice-guy.png" alt="Imagem de Marketing" class="image" />
            </div>
            <div class="">
                <p>Obrigado, <?php echo $nome; ?>, por se inscrever no Vestibular Unifeso 2024!</p>
                <p>Registramos suas informações em nosso banco de dados e entraremos em contato assi que possível</p>
                <p>Aqui estão os detalhes da sua inscrição:</p>
                <ul>
                    <li><strong>Nome Completo:</strong> <?php echo $nome; ?></li>
                    <li><strong>E-mail:</strong> <?php echo $email; ?></li>
                    <li><strong>Telefone:</strong> <?php echo $telefone; ?></li>
                    <li><strong>Curso de Interesse:</strong> <?php echo $curso; ?></li>
                    <li><strong>Mensagem (opcional):</strong> <?php echo $mensagem; ?></li>
                </ul>
            </div>
        </div>
        <a href="http://uddemonstration.rf.gd/Backend/public_html/?page=inscritos" class="btn">Verificar Inscrição</a>
                    
    </section>
    <script src="./assets/js/main.js"></script>
</body>

</html>