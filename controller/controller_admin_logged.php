<?php
/*
* Título: Controlador de Login de Admin
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Verifica se admin está logado.
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Verify
require_once($root.'model/verify/verify_admin_logged.php');



if(!verifyAdminLogged() == 1)
{

	header("refresh:0;url=../index.php");
}
?>
