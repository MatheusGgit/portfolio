<?php
$title = "Contato";
require_once 'assets/templates/head.php';
require_once 'assets/templates/header.php';
require_once 'vendor/autoload.php'; // Autoload inserido para poder usar a biblioteca PHPMailer em assets/backend/mailer.php
?>

<div class="content">
    <?php require_once 'assets/templates/imagem-apresentacao.php' ?>
    <div class="separator"></div>

    <div class="formulario-contato">
        <?php require_once 'assets/backend/mailer.php'; // Insere o backend de contato ?>
        <?php if (isset($_POST['btn-enviar'])) : ?>
            <div class="container-enviado-msg-<?= $status ?>" id="container-enviado-msg">
                <span class="enviado-msg"><?= $mensagem ?></span>
                <span class="close-msg-btn" onclick="closeMsg()"><i class="fa-solid fa-x"></i></span>
            </div>
        <?php endif ?>

        <form action="/contato.php" method="POST">
            <label>Nome</label>
            <input type="text" class="form-input nome-input" name="nome" required>

            <label>Email</label>
            <input type="email" class="form-input email-input" name="email" required>

            <label>Mensagem</label>
            <textarea class="form-input msg-input" name="mensagem"></textarea>

            <button type="submit" name="btn-enviar" id="btn-enviar" class="btn-enviar">Enviar</button>
        </form>

    </div>

    <div class="mais-informacoes">
        <span>Telefone: (41) 98739-0606</span>
    </div>
</div>
<script src="assets/js/closeMsg.js"></script>
<?php require_once 'assets/templates/footer.php'; ?>