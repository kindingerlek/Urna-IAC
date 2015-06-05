<?php

require_once("c:wamp/www/Urna-IAC/model/open_db/open_db.php");
require_once('c:wamp/www/Urna-IAC/model/open_session/open_session.php');

/*
* Título:
*
* Autor:Alisson
* Data de Criação:28/05/2015
*
* Modificado por: Alisson
* Data de Modificação:29/05/2015
* 
* Descrição: Recebe Id, verifica se é eleitor ou admin, se o registro existe no BD e se a senha está correta 
*
* Entrada: $_POST["id"], $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: verifyPw(), error(), openBd(), openSession()
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
