<?php
/*
* Título: Controle de Login
*
* Autor: Alisson e Carlos
* Data de Criação: 29/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: 	Recebe um usuario e uma senha via POST. 
* 				Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

//Sub Controllers
require_once($root.'controller/controller_register_election/controller_register_election_validate.php');

//Erro
require_once($root.'model/error/error.php');

//Open Db
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

//Format
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');
require_once($root.'model/format/format_date.php');

//Verify
require_once($root.'model/verify/verify_address.php');
require_once($root.'model/verify/verify_election.php');
require_once($root.'model/verify/verify_zip_code.php');

//Insert
require_once($root.'model/insert/insert_address.php');
require_once($root.'model/insert/insert_election.php');
require_once($root.'model/insert/insert_zip_code.php');


//Recebe dados via post
$newElection = $_POST;
$newElection['register-period'] = formatDate($newElection['register-period']);

$conn = openDB();

if(!isset($error)) // SE NÃO HOUVER CAMPOS EM BRANCO CONTINUA
{

	$error = validateNewElection($newElection);
	
	if($error === 1) // Se não houver erros verifica se existe no BD
		{
			
			// Atribui a arrayhash os campos dos dados recebidos de $newElection separando em seus rescptivos tipos  
			$election['date'] 			= $newElection['register-period']; //Atribui a $birthday   										
			$election['startTime'] 		= $newElection['register-startTime']; //Atribui a $cpf o campo do 
			$election['endTime'] 		= $newElection['register-endTime'];   //Atribui a $votingCar		
			$election['type'] 			= $newElection['register-type'];//Atribui a $password
			$election['mayor'] 			= $newElection['register-mayor'];
			$election['governor'] 		= $newElection['register-governor'];
			$election['president'] 		= $newElection['register-president'];
			$election['vereador'] 		= $newElection['register-vereador']; //Atribui a $codeZi				
			$election['stateDeputy'] 	= $newElection['register-stateDeputy']; //Atribui a $codeZip	  
			$election['federalDeputy']	= $newElection['register-federalDeputy']; //Atribui a $codeZip
			$election['senator']		= $newElection['register-senator']; //Atribui a $codeZip
			

			// $result = isset($erros) ? $erros : 1; // Retorna ou 1 ou um array de erros
            
			// --------------------------------------------------------------


			$error=null;
			
			if(!verifyElection($election, $conn))     				 	// Entra se user existe no BD, 1 se sim e 0 se não
			{

				insertElection($election, $conn); 					    // Insere User no BD

			    echo("alert('Cadastro realizado com Sucesso!');");
				echo(" location.reload();");

			}else{
			
				$error[0] = -27;                //Retorna erro de usuario já cadastrado
			}
			
			
		}
}


if(is_array($error))
{
	echo "$('.election-error').html('');";

	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);
		
		echo "$('.election-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('.election-error').show();";  
		echo "$('.election-error').append('".$description."<br/>');";
		
		}
}

mysqli_close($conn);
?>
