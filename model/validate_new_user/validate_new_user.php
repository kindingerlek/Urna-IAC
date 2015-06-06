<?php
/*
* Título: New User
*
* Autor: Alisson
* Data de Criação: 04/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Valida os campos recebidos, retorna um Arayhash com tds os erros encontrados se encontrar 
* algum ou 1 se o usuario foi cadastrado
*
* Entrada: Arrayhash newUser
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno:Arrayhash com tds os erros ou  1 se cadastro efetuado com sucesso;
*
* Funções invocadas: evalText(), evalNumber(), evalDate(), getCurrentDate(), evalAge(), evalEmail()
* 
*   
*/
$root = 'c:/wamp/www/Urna-IAC/';
require_once($root.'model/eval/eval_cpf.php');
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');
require_once($root.'model/eval/eval_date.php');
require_once($root.'model/eval/eval_age.php');
require_once($root.'model/eval/eval_number.php');
require_once('cpf_verify.php');              //cpfVerify();
require_once('voting_card_verify.php');	     //votingCard();
require_once('number_verify.php');
require_once('text_verify.php');

/*
 			- register-name        *: Receberá o nome digitado;
            - register-votingCard  *: Receberá o título de eleitor;
            - register-zone        *: Receberá a zona do eleitor;
            - register-session     *: Receberá a seção do eleitor;
            - register-cpf         *: Receberá o CPF do eleitor;
            - register-birthday    *: Receberá a Data de Nascimento do Eleitor;
            - register-codeZip     *: Receberá o CEP do Usuário;
            - register-adress      *: Receberá o Endereço do Eleitor;
            - register-adressNum   *: Receberá o número do endereço do Eleitor;
            - register-neighborhood*: Receberá o Bairro do Eleitor;
            - register-city        *: Receberá a Cidade do Eleitor;
            - register-state       *: Receberá o estado do Eleitor;
            - register-password    *: Receberá a senha do Eleitor.
            - register-cfmPassword *: Receberá novamente a senha  // Inputs do form utilizadas

*/

function validateNewUser($newUser)
{
	//----------------------------------Cpf-------------------------------
	$cpf = $newUser['register-cpf']; //Atribui a $cpf o campo do cpf
	if(cpfVerify($cpf) <= 0) 
		$erros[] = -1;               //Retorna Erro "Cpf inválido"
    //--------------------------------------------------------------------

	//--------------------------------Titulo------------------------------
	$votingCard = $newUser['register-votingCard']; //Atribui a $votingCard
	   											   //o titulo de $newUser
	if(votingCardVerify($votingCard) <= 0) 
		$erros[] = -5;                    //Retorna Erro "Título inválido"
	//--------------------------------------------------------------------

	//-------------------------------password-----------------------------
	$password = $newUser['register-password'];//Atribui a $password
	   									      //a senha de $newUser
	$cfmPassword = $newUser['register-cfmPassword'];//Atribui a $cfmPassword
	   											    //a cfmSenha de $newUser
	if($password != $cfmPassword)
		$erros[] = -7;                 //Retorna erro "Senhas não conferem"
	//--------------------------------------------------------------------

	//---------------------------birthday---------------------------------  
	$birthday = $newUser['register-birthday']; //Atribui a $birthday
	   										   //o birthday de $newUser
	if(evalDate($birthday) <= 0)
		$erros[] = -8;  //Retorna Erro "Data inválido"
	else{
		if(evalAge($birthday) <= 0)
			$erros[] = -9;  //Retorna Erro "Usuario com menos de 16 anos"
		}
	//--------------------------------------------------------------------


	//----------------------------seção-----------------------------------
	$session = $newUser['register-session']; //Atribui a $session
	   										 //a sessão de $newUser
	if(numberVerify($session)<=0)
		$erros[] = -10; //Retorna erro de sessão invalida
	//--------------------------------------------------------------------

	//---------------------------codeZip----------------------------------
	$codeZip = $newUser['register-codeZip']; //Atribui a $codeZip
	   										 //o CEP de $newUser
	if(numberVerify($codeZip)<=0)
		$erros[] = -11; //Retorna erro de codeZip invalida
	//--------------------------------------------------------------------
	
	//--------------------------adressNum---------------------------------
	$adressNum = $newUser['register-adressNum']; //Atribui a $adressNum
	   										 //o Num. da Ksa de $newUser
	if(numberVerify($adressNum)<=0)
		$erros[] = -12; //Retorna erro de Numero de invalida
	//--------------------------------------------------------------------

	//--------------------------name---------------------------------
	$name = $newUser['register-name']; //Atribui a $name
	   										//o nome de $newUser
	if(textVerify($name)<=0)
		$erros[] = -6; 				//Retorna erro de nome invalido
	//--------------------------------------------------------------------
	$result = isset($erros)? $erros : 1;
	return $result;
}
?>