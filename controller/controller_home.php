<?php
/*
* Título: Controlador de Relatório de Eleição
*
* Autor: Alisson e Carlos
* Data de Criação: 09/06/2015
*
* Descrição: Manda para a home do usuário corrente.
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Verify
require_once($root.'model/verify/verify_voter_logged.php');
require_once($root.'model/verify/verify_admin_logged.php');

  if(verifyAdminLogged() == 1)
     header("refresh:0;url=../view/admin_home.php");
  
  else if(verifyVoterLogged() == 1)
	   header("refresh:0;url=../view/login.php");
     
  else
    header("refresh:0;url=../index.php");
  

?>