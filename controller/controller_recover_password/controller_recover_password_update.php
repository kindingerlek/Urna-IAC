<?php
/*
* Título: Controlador de Update de Senha
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Cadastra a nova senha no banco de dados. 
*
* Dependências: 'model/open_db/open_db.php', 'model/delete/delete_data.php', 'model/update/update_password.php' 
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
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
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
	$error = -7; // Senhas não conferem
	$description = error($error,$conn);	// Mostra erro
	echo "$('#recover-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
	echo "$('#recover-error').show();";  
	echo "$('#recover-error').append('".$description."<br/>');";
}


mysqli_close($conn);

?>