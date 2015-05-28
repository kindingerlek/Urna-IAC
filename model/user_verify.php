<?php

//Dependencias
require_once('openDB.php');



/*
* Título:
*
* Autor: Alisson
*
* Data de Criação:
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
function validateUser(){


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
* Autor: Alisson
* Data de Criação:
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
function verifyId();


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
* Autor: Alisson
* Data de Criação:
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
function openSession();




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