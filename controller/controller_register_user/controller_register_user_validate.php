<?php
/*
* Título: Controlador de Validação de Cadastro de Usuário
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Verifica se os campos de Usuário são válidos. Caso contrário retorna erro correspondente.
*
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

// Format
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');
// Eval
require_once($root.'model/eval/eval_cpf.php');
require_once($root.'model/eval/eval_date.php');
require_once($root.'model/eval/eval_age.php');
require_once($root.'model/eval/eval_number.php');
// Validate
require_once($root.'model/validate/validate_cpf.php');              
require_once($root.'model/validate/validate_voting_card.php');	     
require_once($root.'model/validate/validate_number.php');
require_once($root.'model/validate/validate_text.php');
require_once($root.'model/validate/validate_password.php');

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
	
	if(!validateCPF($cpf)) 
		$erros[] = -1;               //Retorna Erro "Cpf inválido"
    //--------------------------------------------------------------------

	//--------------------------------Titulo------------------------------
	$votingCard = $newUser['register-votingCard']; //Atribui a $votingCard
	   											   //o titulo de $newUser
	if(!validateVotingCard($votingCard)) 
		$erros[] = -5;                    //Retorna Erro "Título inválido"
	//--------------------------------------------------------------------

	//-------------------------------password-----------------------------
	$password = $newUser['register-password'];//Atribui a $password
							 			      //a senha de $newUser
	$cfmPassword = $newUser['register-cfmPassword'];//Atribui a $cfmPassword
	   											    //a cfmSenha de $newUser
	if(!validatePassword($password,$cfmPassword))
		$erros[] = -7;                 //Retorna erro "Senhas não conferem"
	//--------------------------------------------------------------------

	//---------------------------birthday---------------------------------  
	$birthday = $newUser['register-birthday']; //Atribui a $birthday
	   										   //o birthday de $newUser
	if(!evalDate($birthday))
		$erros[] = -8;      //Retorna Erro "Data inválido"
	else{
		if(!evalAge($birthday))
			$erros[] = -9;  //Retorna Erro "Usuario com menos de 16 anos"
		}
	//--------------------------------------------------------------------

	//----------------------------seção-----------------------------------
	$session = $newUser['register-session']; //Atribui a $session
	   										 //a sessão de $newUser
	if(!validateNumber($session))
		$erros[] = -10; //Retorna erro de sessão invalida
	//--------------------------------------------------------------------

	//---------------------------codeZip----------------------------------
	$zipCode = $newUser['register-zipCode']; //Atribui a $codeZip
	   										 //o CEP de $newUser
	if(!validateNumber($zipCode))
		$erros[] = -11; //Retorna erro de codeZip invalida
	//--------------------------------------------------------------------
	
	//--------------------------adressNum---------------------------------
	$addressNum = $newUser['register-addressNum']; //Atribui a $adressNum
	   										 //o Num. da Ksa de $newUser
	if(!validateNumber($addressNum))
		$erros[] = -12; //Retorna erro de Numero de invalida
	//--------------------------------------------------------------------

	//--------------------------name---------------------------------
	$name = $newUser['register-name']; //Atribui a $name
	   										//o nome de $newUser
	if(!validateText($name))
		$erros[] = -6; 				//Retorna erro de nome invalido
	//--------------------------------------------------------------------
	
	$result = isset($erros) ? $erros : 1; // Retorna ou 1 ou um array de erros
	
	return $result;
}
?>