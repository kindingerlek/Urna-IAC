
<?php


/*
* Título: verifica Eleitor logado
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se Eleitor está logado
*   
*/


function verifyVoterLogged()
{
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	if(isset($_SESSION["votebem"]["loggedUser"]))
	{
		if($_SESSION["votebem"]["loggedUser"]["cpf"] != "" && $_SESSION["votebem"]["loggedUser"]["isAdmin"] == 0)
		{
			return 1;
		}	
	}
	return 0;
}


