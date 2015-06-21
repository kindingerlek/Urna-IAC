<?php

/*
* Título: Valida Senha
*
* Autor: Alisson
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifia se a senha é compativel com sua confirmação
*
*   
*/

function validatePassword($password, $cfmPassword)
{	

	if($password != $cfmPassword){
		return 0;
	}

	return 1;
}
?>
