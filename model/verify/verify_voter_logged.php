
<?php

/*
* Título: verifyAddress)
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se usuario existe no BD
*
* Entrada: Um campo de texto que deve ser um número
*
* Saída: 
*
* Valor de retorno:1 se valor válido e -0 se invalido
*
* Funções invocadas: nada
* 
*   
*/


function verifyVoterLogged()
{
	session_start();
	
	if(isset($_SESSION["votebem"]["loggedUser"]))
	{
		if($_SESSION["votebem"]["loggedUser"]["cpf"] != "" && $_SESSION["votebem"]["loggedUser"]["isAdmin"] === 0)
		{
			return 1;
		}	
	}
	return 0;
}

