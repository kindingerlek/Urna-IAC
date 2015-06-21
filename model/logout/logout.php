<?php


 /*
 * Título: Realiza logout
 *
 * Autor: Alisson e carlos
 * Data de Criação: 11/06/2015
 *
 * Modificado por:
 * Data de Modificação:
 * 
 * Descrição: Realiza logout, limpando asession e retornando para a tela de login
 *
 */

function logout()
{
	// Se Session existe
	
	if(isset($_SESSION))  
	{
		session_unset(); // Destroi Session
	}

	
	header("refresh:0;url=../../index.php");
}

logout();

?>