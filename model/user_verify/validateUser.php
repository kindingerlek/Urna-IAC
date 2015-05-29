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

// Verifica CPF com função evalCPF() se for usuario;
$isValid = $id[0]=='#'? true : evalCPF($id);

if(!$isValid)
{
	//Se invalido retorna erro do tipo -1, CPF inválido e sai da função
	return -1;
}

//Verifica se o login existe e se a senha é correta
$isValid = verifyId($id,$senha);
if($isValid < 0)
	return $isValid;

//Se login válido  adiciona da SESSION o tipo de Usuário logado 
//openSession($isValid);

return $isValid; // 1 se for usuario e 2 se for admin
};
?>