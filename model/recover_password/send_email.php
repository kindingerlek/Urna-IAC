<?php
 
/* Extender a classe do phpmailer para envio do email*/
require_once("c://wamp/www/Urna-IAC/resources/PHPMailer_5.2.4/class.phpmailer.php");
 
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
    $mail->ContentType = "text/html;charset = utf-8";
 
    /* Função Responsável por Enviar o Email*/
    if(!$mail->Send()) {
        $error = "<font color='red'><b>Mail error: </b></font>".$mail->ErrorInfo; 
        return false;
    } else {
        $error = "<font color='blue'><b>Mensagem enviada com Sucesso!</b></font>";
        return true;
    }
}

?>