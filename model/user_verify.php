<?php

//Dependencias
require_once('openDB.php');



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
	return false;

//Se login válido  adiciona da SESSION o tipo de Usuário logado 
openSession($isValid);

};



/*
* Título: Validador de CPF
*
* Autor: Carlos
* Data de Criação: 27/05/2015
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
function evalCPF($CPF){

	//Retira os caracteres não numéricos
	$CPF = preg_replace('/[^0-9]/', '', $CPF);

	//Verifica se a string possui 11 caracteres
	if (strlen($CPF) != 11){
		return 0;
	//Verifica se alguma sequencia invalida foi digitada	
	} else if (	$CPF == '00000000000' || 
				$CPF == '11111111111' || 
				$CPF == '22222222222' || 
				$CPF == '33333333333' || 
				$CPF == '44444444444' || 
				$CPF == '55555555555' || 
				$CPF == '66666666666' || 
				$CPF == '77777777777' || 
				$CPF == '88888888888' || 
				$CPF == '99999999999') {
        return 0;
     //Verifica se o CPF é válido
     } else {
		for ($total = 9; $total < 11; $total++) {   
	        $soma = 0;
	        for ($digito = 0; $digito < $total; $digito++) {
	            $soma += $CPF[$digito] * (($total + 1) - $digito);
	        }
	        $soma = ((10 * $soma) % 11) % 10;
	        if ($CPF[$digito] != $soma) {
	            return 0;
	        }
	    }
	    return 1;
    }
};



/*
* Título:
*
* Autor:Alisson
* Data de Criação:28/05/2015
*
* Modificado por: Alisson
* Data de Modificação:28/05/2015
* 
* Descrição: Recebe Id, verifica se é eleitor ou admin, se o registro existe no BD e se a senha está correta 
*
* Entrada: $_POST["id"], $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: verifyPw(), error(), openBd();  
*
*/

function verifyId($id,$senha)
{
	//Verifica se é eleitor ou admin, ou seja verifica se existe o '#' no id

	$isAdmin = $id[0] == "#" ? true : false;
	
	$pw = md5($pw);

	//Busca no banco de dados o id informado
	$connection = openBd();

	$query = $isAdmin ? "SELECT *FROM USUARIOS WHERE idAdmin ='$id'" : "SELECT *FROM USUARIOS WHERE CPF ='$id'";
	
	$result = mysqli_query($connection, $query);

	//Se der falha na busca encerra
	if (!$result)
	    {
	    	error(4);
	    	return 0;
	    }
	//Se não houver nehum registro encerra
	if(!mysqli_num_rows($result))
		{
			error(3);
			return 0;
		}
		
	$userReg = mysqli_fetch_array($result);

	mysqli_close($connection);
	
	//Compara senha com senha do BD
	if($userReg["senha"] == $senha)   
	{
		openSession($userReg);

		if($isAdmin)
			return 2;
		else
			return 1;
	}

	return 0;
}


/*
* Título: Verificador de Senha
*
* Autor:Carlos
* Data de Criação: 28/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe senha e verifica se é compativel à cadastrada no BD
*
* Entrada: Id e Senha 
*
* Saída: Valor númerico 0 se ID inválido, 1 se válido
* Saída: Valor númerico 0 se senha é incompatível e 1 se compatível
*
* Valor de retorno: 0 ou 1
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@  
*
*/
function verifyPW($id, $pw){

	//Criptografando a senha
	$pw = md5($pw);

	//Criando conexão com o DB
	$conn = openDB();

	$sql="SELECT * FROM usuarios WHERE nome='$id'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	mysqli_close($conn);
		
	//Verificando se o password é compatível
	if ($row["password"]==$pw){
		return 1;
	} else {
		return 0;
	}
	
};

/*
* Título:
*

* Autor:Alisson
* Data de Criação:28/05/2015
* Autor: Alisson
* Data de Criação:
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
function openSession($typeUser){

	session_start();
	$_SESSION["loggedUser"] = $typeUser;
}




/*
* Título:
*
* Autor: Carlos
* Data de Criação: 28/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe senha e verifica se é compativel à cadastrada no BD
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
function error($codigo){

	//Criando conexão com o DB
	$conn = openDB();

	$sql="SELECT * FROM erros WHERE cod='$codigo'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	mysqli_close($conn);
		
	//Retornando erro
	return $row["descricao"];
	
};
?>