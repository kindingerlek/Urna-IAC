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

//Open Db
require_once($root.'model/open_db/open_db.php');

//Update
require_once($root.'model/update/update_password.php');




//Recebe dados via post
session_start();
$conn = openDB();

$cpf = $_SESSION['votebem']['cpf'];
$password = $_POST['recover-password'];
$passwordCfm = $_POST['recover-cfmPassword'];

if($password == $passwordCfm)
{
	$password = md5($password);
	updatePassword($cpf,$password,$conn);

	echo ("window.location.href = '../index.php';");

}else
{
	$error = -7;
	$description = error($error,$conn);	// Mostra erro
	echo "$('#recover-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
	echo "$('#recover-error').show();";  
	echo "$('#recover-error').append('".$description."<br/>');";
}


mysqli_close($conn);

?>