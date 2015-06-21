
<?php

/*
* Título: verifica se admin está logado
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se Admin está logado 
*   
*/


function verifyAdminLogged()
{
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	if(isset($_SESSION["votebem"]["loggedUser"]))
	{
		if($_SESSION["votebem"]["loggedUser"]["isAdmin"] == 1 )
		{
			return 1;
		}	
	}
	return 0;
}


