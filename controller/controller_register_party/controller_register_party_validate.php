<?php
/*
* Título: Controlador de Validação de Cadastro de Partido
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Verifica se os campos de Partido são válidos. Caso contrário retorna erro correspondente.
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

function validateNewParty($newParty)
{
	
	//--------------------------------idParty-------------------------------
	$idParty = $newParty['idParty']; //Atribui a $cpf o campo do cpf
	
	if(!validateNumber($idParty)) 
		$erros[] = -17;               //Retorna Erro "Cpf inválido"
    //--------------------------------------------------------------------

	//--------------------------------name------------------------------
	$name = $newParty["name"];    //Atribui a $name
	   									   //o name de $newParty
	if(!validateText($name)) 
		$erros[] = -18;                    //Retorna Erro "Nome"
	//--------------------------------------------------------------------

	//-------------------------------acronym-----------------------------
	$acronym = $newParty["acronym"];//Atribui a $acronym
							 			      //a acronym de $newParty
	
	if(!validateText($acronym))
		$erros[] = -19;                 //Retorna erro "Sigla inválida"
	//--------------------------------------------------------------------
	
	$result = isset($erros) ? $erros : 1; // Retorna ou 1 ou um array de erros
	
	return $result;
}
?>