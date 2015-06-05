<?php

//Chamando dependencias
require_once('eval_cpf.php');
require_once('c://wamp/www/Urna-IAC/model/open_session/open_session.php');
require_once('verify_id.php');



/*
* Título:
*
* Autor: Alisson
*
* Data de Criação:28/05/2015
*
* Última modificação:29/05/2015
* Modificado por:Alisson
* 
* Descrição: 	Verifica se dados são válidos
*				Caso sejam inválidos chama a função erro
*				Chama a função verifyId();
*				Chama a função openSession();
*				retorna erro correspondete ou 1 para usuario logado, ou 2 para admin logado
*
* Entrada:  $_POST["Id"], $_POST["senha"]
*
* Saída: Erro ou 1 caso sucesso;
*
* Valor de retorno: 
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