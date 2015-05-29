<?php

//Chamando dependencias
require_once('evalCPF.php');
require_once('verifyId.php');
require_once('openSession.php');

/*
* Título:
*
* Autor: Alisson
*
* Data de Criação:28/05/2015
* Última modificação:
* Modificado por:
* 
* Descrição: 	Verifica se dados são válidos
*				Caso sejam inválidos chama a função erro
*				Chama a função verifyId();
*				Chama a função openSession();
*				Direciona para tela correspondente
*
* Entrada:  $_POST["Id"], $_POST["senha"]
*
* Saída: Erro ou Redirecionamento para a a tela correspondente
*
* Valor de retorno: 
*
*/
function validateUser($id, $senha){

// Verifica CPF com função evalCPF();
$isValid = evalCPF($id);
if($isValid)
{
	//Se invalido mostra error do tipo 1 e sai da função
	error(1);
	return false;
}

//Verifica se o login existe e se a senha é correta
$isValid = verifyId($id,$senha);
if($isValid == 0)
	return false;

//Se login válido  adiciona da SESSION o tipo de Usuário logado 
openSession($isValid);

};
?>