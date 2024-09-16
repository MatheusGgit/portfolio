<?php
/**
 * Script usando a biblioteca PHPMailer: https://github.com/PHPMailer/PHPMailer
 * Definições para que o email seja enviado DIRETAMENTE do formulário.
 */
use PHPMailer\PHPMailer\PHPMailer;
try {
    if (isset($_POST['btn-enviar'])) {

        // Definições 
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'garciamatheus27@gmail.com';
        $mail->Password = 'wfai vxky iybf kuvr';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFROM('garciamatheus27@gmail.com');

        $mail->addAddress($_POST['email']); // Recebe o email inserido no formulário
        $mail->isHTML(true); // Define o conteúdo como HTML
        $mail->Subject = $_POST['nome']; // Recebe o nome inserido no formulário
        $mail->Body = $_POST['mensagem']; // Recebe a mensagem inserida no formulário

        $mail->send();

        $status = 'success';
        $mensagem = 'Enviado com sucesso!'; // Retorna uma mensagem de sucesso ao usuário
    }
} catch (Throwable $th) {
    $status = 'danger';
    $mensagem = 'Não foi possível enviar o email'; // Retorna uma mensagem de falha ao usuário
}
