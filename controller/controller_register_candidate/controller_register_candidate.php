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
require_once($root.'controller/controller_register_candidate/controller_register_candidate_validate.php');

//Erro
require_once($root.'model/error/error.php');

//Open Db
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

//Format
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');

//Verif
require_once($root.'model/verify/verify_candidate.php');


//Insert
require_once($root.'model/insert/insert_candidate.php');



 			
 			// $newcandidate['register-name'] = "Carlos" ;     
 			// $newcandidate['register-votingCard'] = "092255330604"; 
 			// $newcandidate['register-zone'] = "1234";       
 			// $newcandidate['register-session'] = "1234";    
 			// $newcandidate['register-cpf'] = "05829791960";    
 			// $newcandidate['register-birthday'] = "12/12/1996";   
    //         $newcandidate['register-zipCode'] = "83701485";    
    //         $newcandidate['register-address'] = "qualquer coisa";     
    //         $newcandidate['register-addressNum'] = "1005";  
    //         $newcandidate['register-neighborhood'] = "Costeira";
    //         $newcandidate['register-city'] = "Curitiba";      
    //         $newcandidate['register-state'] = "PR";
    //         $newcandidate['register-email'] = "Aslals@sajksjak.com";
    //         $newcandidate['register-complement'] = "Casa";     
    //         $newcandidate['register-password'] = "08071996";   
    //         $newcandidate['register-cfmPassword'] = "08071996"; 



//Recebe dados via post
$newCandidate = $_POST;

foreach ($newCandidate as $field => $data) {
	if(!evalField($data))
		{
			$error[] = -14;
			break;
			
		}
}


$conn = openDB();

if(!isset($error)) // SE NÃO HOUVER CAMPOS EM BRANCO CONTINUA
{

	$error = validateNewcandidate($newcandidate);
	
	if($error === 1) // Se não houver erros verifica se existe no BD
		{
			
			// Atribui a arrayhash os campos dos dados recebidos de $newcandidate separando em seus rescptivos tipos

			$candidate['cpf'] = formatNumber($newcandidate["register-cpf"]); 				   		//Formata cpf e salva em $cpf
			$candidate['name'] =	formatText($newcandidate["register-name"]);                 		//Formata nome e salva em $name
			$candidate['votingCard'] = formatNumber($newcandidate["register-votingCard"]);   		//Formata titulo e salva em $votingCard
			$candidate['zone'] =	formatNumber($newcandidate["register-zone"]);               		//Formata zona e salva em $zone
			$candidate['session'] = formatNumber($newcandidate["register-session"]);         		//Formata sessão e salva em $session		
			$candidate['birthday'] = $newcandidate["register-birthday"];							//Formata aniv e salva em $birthday 
			$candidate['password'] = md5($newcandidate["register-password"]);               		//Formata senha e salva em $password        
			$candidate['email'] = $newcandidate["register-email"];								//Formata email e salva em $email
			$candidate['complement'] = formatNumber($newcandidate["register-complement"]);   		//Forma complmento e salva em $complement   
			$candidate['zipCode'] = formatNumber($newcandidate["register-zipCode"]);         		//Formata CEP e salva em $zipCode
			$candidate['addressNum'] = formatNumber($newcandidate["register-addressNum"]); 		//Formata End. e salva em $adress
			                        
		
			                              
			// --------------------------------------------------------------


			//$error=null;
			
			if(!verifycandidate($candidate, $conn))     				 	// Entra se candidate existe no BD, 1 se sim e 0 se não
			{
				
				if (!verifyAddress($address, $conn)) {     	 	// Entra se endereço existe no BD, 1 se sim e 0 se não
					
					if (!verifyZipCode($zipCode, $conn)) { 		// Entra se zipCode existe no BD, 1 se sim e 0 se não 
						
						insertZipCode($zipCode, $conn);     	// Insere zipCode no BD
					}

					insertAddress($address, $conn);         	// Insere endereço no BD
				}

				insertcandidate($candidate, $conn); 					    // Insere candidate no BD

			    echo("alert('Cadastro realizado com Sucesso!');");
				echo("window.location.href = '../index.php';");

			}else{
			
				$error[0] = -13;                //Retorna erro de usuario já cadastrado
			}
			
			
		}
}


if(is_array($error))
{
	echo "$('#register-error').html('');";

	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);
		
		echo "$('#register-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('#register-error').show();";  
		echo "$('#register-error').append('".$description."<br/>');";
		
		}
}

mysqli_close($conn);
?>
