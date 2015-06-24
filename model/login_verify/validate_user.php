<?php

//Chamando dependencias
require_once('c:/wamp/www/Urna-IAC/model/eval/eval_cpf.php');
require_once('verify_id.php');



 
  /*
  * Título: Valida login de Usuario
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica o id e senha do usuario ao logar
  *
  */


function validateUser($id, $senha){

if(strlen($id)==0)
	return -1;

if(strlen($senha)==0)
	return -4;

// Verifica CPF com função evalCPF() se for usuario;
if($id[0]=='#')
{
	$isValid = true;
}
else{

	$id = preg_replace('/[^0-9]/', '', $id);
	$isValid = evalCPF($id);
}


//Se invalido retorna erro do tipo -1, CPF inválido e sai da função
if(!$isValid)	
	return -1;

//Verifica se o login existe e se a senha é correta
return verifyId($id,$senha);

};

?>