<?php
/*
* Título: cpfVerify
*
* Autor: Alisson
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe um cpf verifica se é válido e envia 1 se for e -1 se estiver invalido
*
* Entrada: CPF
*
* Saída: Valor númerico 1 se CPF válido e -1 se invalido
*
* Valor de retorno: 1 e -1 ;
*
* Funções invocadas:  evalNumber() e formatNumber();
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
