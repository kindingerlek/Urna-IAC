<?php
/*
* Título: Controle de Recuperação de Senha
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Recebe os dados do usuário a ser deletado e chama a função responsável pela deleção. 
*
* Dependências: 'model/open_db/open_db.php', 'model/delete/delete_data.php' 
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Erro
require_once($root.'model/error/error.php');

//OpenDb
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

$conn = openDB();

$code = $_POST["recover-code"];
$codeCfm =$_SESSION["votebem"]["code"];

if($code==$codeCfm)
{	
	echo "$('#popup-pwRecover').modal('hide');$('#popup-pwReset').modal('show');";  //muda popuu
}else
{

	$error = -15; // código incorreto
	$description = error($error,$conn);	// Mostra erro
	echo "$('#recover-passwordError').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
	echo "$('#recover-passwordError').show();";  
	echo "$('#recover-passwordError').append('".$description."<br/>');";

}

//Recebe dados via post
mysqli_close($conn);

?>