<?php
/**/


/*
* Título:
*
* Autor: Alisson
*
* Data de Criação:28/05/2015
* Última modificação:
* Modificado por:
* 
* Descrição: 	Verifica se dados são válidos
*				Caso sejam inválidos chama a função erro
*				Chama a função verifyId();
*				Chama a função openSession();
*				Direciona para tela correspondente
*
* Entrada:  $_POST["Id"], $_POST["senha"]
*
* Saída: Erro ou Redirecionamento para a a tela correspondente
*
* Valor de retorno: 
*
*/
function validateUser($id, $senha){

// Verifica CPF com função evalCPF();
	$isValid = evalCPF($id);
	if($isValid)
	{
		//Se invalido mostra error do tipo 1 e sai da função
		error(1);
		return false;
	}

	//Verifica se o login existe e se a senha é correta
	$isValid = verifyId($id,$senha);
	if($isValid == 0)
	{
		//Se invalido mostra error do tipo 2 e sai da função
		error(2);
		return false;
	}

	//Se login válido  adiciona da SESSION o tipo de Usuário logado 
	openSession($isValid);

};



/*
* Título:
*
* Autor:Carlos
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se um CPF é válido
*
* Entrada: Um CPF, uma sequencia de 11 números, ex:99999999999
*
* Saída: Valor númerico, 1 caso CPF válido, 0 caso CPF inválido
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: Nenhuma
*
*/
function evalCPF();



/*
* Título:
*
* Autor:Alisson
* Data de Criação:28/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe Id, verifica se é eleitor ou admin, se o registro existe no BD e se a senha está correta 
*
* Entrada: $_POST["id"], $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@, verifyPw()  
*
*/
function verifyId(var $id, var $senha)
{
	//Verifica se é eleitor ou admin, ou seja verifica se existe o '#' no id
	$isAdmin = strrchr($id,'#');

	// Se é admin retira o # para procurar do bd
	if($isAdmin === true)  
	{
		//Busca no banco de dados o id de ADMIN informado
		$connection = openDb();
		$query = "SELECT *FROM USUARIOS WHERE idAdmin ='$idAdmin'";
		$result = mysqli_query($connection, $query);

	}
	else{
	
		//Busca no banco de dados o id informado
		$connection = openDb();
		$query = "SELECT *FROM USUARIOS WHERE CPF ='$id'";
		$result = mysqli_query($connection, $query);
	
	}

	//Se der falha na busca encerra
	if (!$result)
	    {
	    	error(3);
	    	return 0;
	    }

	//Se não houver nehum registro encerra
	if(!mysql_num_rows($result))
		{
			error(4);
			return 0;
		}

	$resultRow = mysql_fetch_array($result);
	
	//Compara senha com senha do BD
	if($resultRow["senha"] == $senha)   //////////////    Criptografar
	{
		if($isAdmin)
			return 2;
		else 				
			{
				return 1;
			
			}
	}
}


/*
* Título:
*
* Autor:Carlos
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: REcebe senha e verifica se é compativel à cadastrada no BD
*
* Entrada: $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 se válido
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@  
*
*/
function verifyPW();


/*
* Título:
*
* Autor:Alisson
* Data de Criação:28/05/2015
*
* Modificado por:
* Data de Modificação:
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
function openSession($userRow){

	session_start();
	$_SESSION["voteBem"]["loggedUser"] = $userRow;
}




/*
* Título:
*
* Autor:Carlos
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: REcebe senha e verifica se é compativel à cadastrada no BD
*
* Entrada: $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@  
*
*/
function error();


?>