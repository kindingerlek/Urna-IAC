<?php

require_once("c:wamp/www/Urna-IAC/model/open_db/open_db.php");
require_once('c:wamp/www/Urna-IAC/model/open_session/open_session.php');

 
  /*
  * Título: Verifica Id de Usuario ou admin
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica o id e se é Admin ou Votador
  *
  */

function verifyId($id,$pw)
{
	//Verifica se é eleitor ou admin, ou seja verifica se existe o '#' no id

	$isAdmin = $id[0] == "#" ? true : false;
	
	$pw = md5($pw);
	
	//Busca no banco de dados o id informado
	$connection = openDB();

	$query = $isAdmin ? "SELECT *FROM USUARIOS WHERE idAdmin ='$id'" : "SELECT *FROM USUARIOS WHERE CPF ='$id'";
	
	$result = mysqli_query($connection, $query);

	//Se der falha na busca encerra
	if (!$result)
	    {
	    	return -3;
	    }
	//Se não houver nehum registro encerra
	if(!mysqli_num_rows($result))
		{
			return -2;
		}
		
	$userReg = mysqli_fetch_array($result);

	mysqli_close($connection);
	
	//Compara senha com senha do BD
	if($userReg["senha"] == $pw)   
	{
		openSession($userReg, $isAdmin);

		if($isAdmin)
			return 2;
		else
			return 1;
	}

	return -4;
}
?>
