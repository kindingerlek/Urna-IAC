<?php

/*
* Título: Logout
*
* Autor: Alisson
* Data de Criação: 29/05/2015
*
* Modificado por:
* Data de Modificação:
*
* Descrição: Verifica se SESSION está de aberta e a fecha se for o caso e redireciona para login
*
* Entrada: 
*
* Saída: Redireciona para a página de login
*
* Valor de retorno:  
*
* Funções invocadas:   
*
*/
function logout()
{
	// Se Session existe
	if(isset($_SESSION))  
	{
	    session_destroy(); // Destroi Session
	}

	header('../../view/view_login.php');
}

?>