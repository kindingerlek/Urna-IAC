<?php


$message = "Olá, ".$name." <br><br><br>Por favor, insira o código abaixo para reiniciar sua senha.<br><br><br>".$txtAssunto."<br><b>Mensagem:</b> ".$txtMensagem;
 
/* Extender a classe do phpmailer para envio do email*/
require_once("c://wamp/www/Urna-IAC/PHPMailer_5.2.4/class.phpmailer.php");
 
/* Definir Usuário e Senha do Gmail de onde partirá os emails*/
define('GUSER', 'totheworldgroup@gmail.com'); 
define('GPWD', 'albrcalu');
 
function smtpmailer($para, $de, $nomeDestinatario, $assunto, $corpo) { 
    global $error;
    $mail = new PHPMailer();
    /* Montando o Email*/
    $mail->IsSMTP();            /* Ativar SMTP*/
    $mail->SMTPDebug = 0;        /* Debugar: 1 = erros e mensagens, 2 = mensagens apenas*/
    $mail->SMTPAuth = true;        /* Autenticação ativada    */
    $mail->SMTPSecure = 'tls';    /* TLS REQUERIDO pelo GMail*/
    $mail->Host = 'smtp.gmail.com';    /* SMTP utilizado*/
    $mail->Port = 587;             /* A porta 587 deverá estar aberta em seu servidor*/
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->SetFrom($de, $nomeDestinatario);
    $mail->Subject = $assunto;
    $mail->Body = $corpo;
    $mail->AddAddress($para);
    $mail->IsHTML(true);
 
    /* Função Responsável por Enviar o Email*/
    if(!$mail->Send()) {
        $error = "<font color='red'><b>Mail error: </b></font>".$mail->ErrorInfo; 
        return false;
    } else {
        $error = "<font color='blue'><b>Mensagem enviada com Sucesso!</b></font>";
        return true;
    }
}
 
/* Passagem dos parametros: email do Destinatário, email do remetende, nome do remetente, assunto, mensagem do email.*/
 if (smtpmailer($txtEmail, 'totheworldgroup@gmail.com', $txtNome, $txtAssunto, $corpoMensagem)) {
     Header("location: sucesso.php"); // Redireciona para uma página de Sucesso.
}
if (!empty($error)) echo $error;
?>