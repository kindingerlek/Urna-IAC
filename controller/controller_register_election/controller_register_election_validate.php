<?php
/*
* Título: Controlador de Validação de Cadastro de Eleição
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Verifica se os campos de Eleição são válidos. Caso contrário retorna erro correspondente.
*
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

// Format
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');
// Eval
require_once($root.'model/eval/eval_date.php');
require_once($root.'model/eval/eval_time.php');
require_once($root.'model/eval/eval_number.php');
// Validate	     
require_once($root.'model/validate/validate_number.php');

/*
 	
        Dicionário de IDs, Names e Classes        
             
        >IDs e/ou Names
            - form-search               : Formulário que terá a combobox, campo de pesquisa e o botão de submit;
            - search-combo              : Combobox seletivo do tipo de pesquisa
            - search-input              : Input de texto para a pesquisa;
            - search-submit             : Botão de submit da pesquisa;
            - register-election         : Botão que irá abrir o formulário de nova eleição;
            - table                     : Tabela para inserir os dados;
            - table-body                : Corpo da tabela para insersão dinâmica
            
        >IDs/Names (Pop-Up Período da Eleição)
            - popup-newElection-period  : Referente à pop-up em si;
            - register-period           : Input da data que a eleição deverá começar;
            - register-startTime        : Input da hora de início da eleição;
            - register-endTime          : Input da hora de Término da eleição;
            
        >IDs/Names (Pop-Up Tipo de Eleição)
            - popup-newElection-type    : Referente à pop-up em si;
            - register-type             : Combobox para selecionar o tipo de eleição entre municipal e estadual
                > municipal             : Valor da opção "Municipal";
                > federal               : Valor da opção "Estudual e Federal";
            - type-nextButton           : Botão avançar da popup;
            
        >IDs/Names (Pop-Up Vagas Minicipais)
            - popup-newElection-municipal : Referente à pop-up em si;
            - register-mayor              : Input para quantidade de vagas do Prefeito;
            - register-vereador           : Input para quantidade de vagas de Vereadores;
            
        >IDs/Names (Pop-Up Vagas Estaduais e Federais)
            - popup-newElection-federal   : Referente à pop-up em si;
            - register-president          : Input para a quantidade de Presidentes
            - register-governor           : Input para a quantidade de Goveradores
            - register-federalDeputy      : Input para a quantidade de Deputados Federais
            - register-stateDeputy        : Input para a quantidade de Deputados Estaduias
            - register-senator            : Input para a quantidade de Senador

*/

function validateNewElection($newElection)
{

	//---------------------------birthday---------------------------------  
	$date = $newElection['register-period']; //Atribui a $birthday
	   										   //o birthday de $newElection
	if(!evalDate($date))

		$erros[] = -8;      //Retorna Erro "Data inválido"
	
	//--------------------------------------------------------------------
	//----------------------------------Cpf-------------------------------
	$startTime = $newElection['register-startTime']; //Atribui a $cpf o campo do cpf
	
	if(!evalTime($startTime)) 
		$erros[] = -19;               //Retorna Erro "Cpf inválido"
    //--------------------------------------------------------------------

	//--------------------------------Titulo------------------------------
	$endTime = $newElection['register-endTime'];   //Atribui a $votingCard
	   											   //o titulo de $newElection
	if(!evalTime($endTime)) 
		$erros[] = -19;

	if($endTime <= $startTime) 
		$erros[] = -20;                    //Retorna Erro "Título inválido"
	//--------------------------------------------------------------------

	//-------------------------------password-----------------------------
	if(isset($newElection['register-type']))
	{
		$type = $newElection['register-type'];//Atribui a $password
		$mayor = $newElection['register-mayor'];
		$governor = $newElection['register-governor'];
		$president = $newElection['register-president'];
		//--------------------------------------------------------------------	
		//----------------------------seção-----------------------------------
		 //Atribui a $session
		   										 //a sessão de $newElection
		//--------------------------------------------------------------------
		//---------------------------codeZip----------------------------------
		$vereador = $newElection['register-vereador']; //Atribui a $codeZip
		   										 //o CEP de $newElection
		if(!validateNumber($vereador))
			$erros[] = -21; //Retorna erro de codeZip invalida
		//--------------------------------------------------------------------
		
		//--------------------------adressNum---------------------------------
		$stateDeputy = $newElection['register-stateDeputy']; //Atribui a $codeZip
		   										 //o CEP de $newElection
		if(!validateNumber($stateDeputy))
			$erros[] = -22; //Retorna erro de codeZip invalida
		//--------------------------------------------------------------------

		//--------------------------name---------------------------------
		$federalDeputy = $newElection['register-federalDeputy']; //Atribui a $codeZip
		   										 //o CEP de $newElection
		if(!validateNumber($federalDeputy))
			$erros[] = -23; //Retorna erro de codeZip invalida 				//Retorna erro de nome invalido
		//--------------------------------------------------------------------
	}

	$result = isset($erros) ? $erros : 1; // Retorna ou 1 ou um array de erros
	
	return $result;
}
?>