<?php
/*
* Título: Adm logado
*
* Autor: Alisson 
* Data de Criação: 09/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Redireciona se admin não logado na page de admin
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

//Verify
require_once($root.'model/verify/verify_admin_logged.php');



if(!verifyAdminLogged() !== 1)
{
	header("refresh:0;url=../index.php");
}
?>
