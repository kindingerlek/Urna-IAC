<?php
/*
* Título: Controle de Home
*
* Autor: Lucas
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

//Verify
require_once($root.'model/verify/verify_voter_logged.php');
require_once($root.'model/verify/verify_admin_logged.php');

  if(verifyAdminLogged() == 1)
     header("refresh:0;url=../view/admin_home.php");
  
  else if(verifyVoterLogged() == 1)
	   header("refresh:0;url=../view/voter_urn.php");
     
  else
    header("refresh:0;url=../index.php");
  

?>