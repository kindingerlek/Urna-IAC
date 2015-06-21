<?php
/*
* Título: Controlador de Login de Eleitor
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Verifica se eleitor está logado.
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Verify
require_once($root.'model/verify/verify_voter_logged.php');



if(!verifyVoterLogged() == 1)
{
	
	header("refresh:0;url=../index.php");
	
}
?>
