<?php

/*
* Título:
*

* Autor:Alisson
* Data de Criação:28/05/2015
*
* Modificado por:Alisson
* Data de Modificação:29/05
* 
* Descrição:		Recebe o tipo de usuário que logou, 1 - eleitor, 2 - admin
					Abre SESSION
					Salva o tipo de usuario logado na SESSION
*
* Entrada: $typeUser
*
* Saída: SESSION iniciada como o tipo de usuario logado 1 se eleitor,  2 se admin 
*
* Valor de retorno:  
*
* Funções invocadas: Nenhuma  
*
*/
function openSession($user, $isAdmin){

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	$_SESSION["votebem"]["loggedUser"]= $user;
	$_SESSION["votebem"]["loggedUser"]["isAdmin"] = $isAdmin;
	
}

?>