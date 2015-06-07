<?php
/*
* Título: New Candidate
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
* Entrada: Arrayhash newCandidate
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

function validateNewCandidate($newCandidate)
{
	
	

	//--------------------------------idCandidate-------------------------------
	$idCandidate = $newCandidate['idCandidate']; //Atribui a $cpf o campo do cpf
	
	if(!validateNumber($idCandidate)) 
		$erros[] = -24;               //Retorna Erro "Id de candidato inválido"
    //--------------------------------------------------------------------

	//--------------------------------name------------------------------
	$name = $newCandidate["name"];    //Atribui a $name
	   									   //o name de $newCandidate
	if(!validateText($name)) 
		$erros[] = -25;                    //Nome de candidato inválido
	//--------------------------------------------------------------------

	//-------------------------------party-----------------------------
	$party = $newCandidate["idParty"];        //Atribui a $party
							 			      //a party de $newCandidate
	
	if(!validateNumber($party))
		$erros[] = -17;                 //Retornaerro "PArtido inválido"
	//------------------------------------ --------------------------------

	//-------------------------------acronym-----------------------------
	$office = $newCandidate["idOffice"];//Atribui a $office
							 			      //a office de $newCandidate
	
	if(!validateNumber($office))
		$erros[] = -17;                 //Retornaerro "PArtido inválido"
	//------------------------------------ --------------------------------
	
	$result = isset($erros) ? $erros : 1; // Retorna ou 1 ou um array de erros
	
	return $result;
}
?>