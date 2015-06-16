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
	echo("alert('true');");
	echo "$('#popup-pwRecover').modal('hide');$('#popup-pwReset').modal('show');";  //muda popuu
}else
{
	echo("alert('false');");
	// $error = -15; // código incorreto
	// $description = error($error,$conn);	// Mostra erro
	// echo "$('#recover-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
	// echo "$('#recover-error').show();";  
	// echo "$('#recover-error').append('".$description."<br/>');";
}

//Recebe dados via post
mysqli_close($conn);

?>