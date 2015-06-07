<?php
/*
* Título: Controle de Login
*
* Autor: Alisson e Carlos
* Data de Criação: 29/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: 	Recebe um usuario e uma senha via POST. 
* 				Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

//Erro
require_once($root.'model/error/error.php');

//Eval
require_once($root.'model/eval/eval_field.php');

$code = $_POST["recover-code"];
$codeCfm =$_SESSION["votebem"]["code"];

if($code==$codeCfm)
{
	echo "$('#popup-pwRecover').modal('hide');$('#popup-pwReset').modal('show');";  //muda popuu
}else
{
	$error = -15; // código incorreto
	$description = error($error,$conn);	// Mostra erro
	echo "$('#register-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
	echo "$('#register-error').show();";  
	echo "$('#register-error').append('".$description."<br/>');";
}

//Recebe dados via post


?>