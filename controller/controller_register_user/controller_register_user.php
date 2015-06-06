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
require_once($root.'controller/controller_register_user/controller_register_user_validate.php');

//Erro
require_once($root.'model/error/error.php');

//Open Db
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

//Format
require_once($root.'model/format/format_number.php');
require_once($root.'model/format/format_text.php');

//Verify
require_once($root.'model/verify/verify_address.php');
require_once($root.'model/verify/verify_user.php');
require_once($root.'model/verify/verify_zip_code.php');

//Insert
require_once($root.'model/insert/insert_address.php');
require_once($root.'model/insert/insert_user.php');
require_once($root.'model/insert/insert_zip_code.php');


 			$newUser['register-name'] = "Carlos" ;     
 			$newUser['register-votingCard'] = "092255330604"; 
 			$newUser['register-zone'] = "1234";       
 			$newUser['register-session'] = "1234";    
 			$newUser['register-cpf'] = "05829791960";    
 			$newUser['register-birthday'] = "12/12/1996";   
            $newUser['register-zipCode'] = "83701485";    
            $newUser['register-address'] = "qualquer coisa";     
            $newUser['register-addressNum'] = "1005";  
            $newUser['register-neighborhood'] = "Costeira";
            $newUser['register-city'] = "Curitiba";      
            $newUser['register-state'] = "PR";
            $newUser['register-email'] = "Aslals@sajksjak.com";
            $newUser['register-complement'] = "Casa";     
            $newUser['register-password'] = "08071996";   
            $newUser['register-cfmPassword'] = "08071996"; 



//Recebe dados via post
//$newUser = $_POST;

foreach ($newUser as $field => $data) {
	if(!evalField($data))
		{
			$error[] = -14;
			
		}
}


$conn = openDB();

if(!isset($error)) // SE NÃO HOUVER CAMPOS EM BRANCO CONTINUA
{

	$error = validateNewUser($newUser);
	
	
	if($error !== 1) // Se não houver erros verifica se existe no BD
		{
			
			// Atribui a arrayhash os campos dos dados recebidos de $newUser separando em seus rescptivos tipos

			$user['cpf'] = formatNumber($newUser["register-cpf"]); 				   		//Formata cpf e salva em $cpf
			$user['name'] =	formatText($newUser["register-name"]);                 		//Formata nome e salva em $name
			$user['votingCard'] = formatNumber($newUser["register-votingCard"]);   		//Formata titulo e salva em $votingCard
			$user['zone'] =	formatNumber($newUser["register-zone"]);               		//Formata zona e salva em $zone
			$user['session'] = formatNumber($newUser["register-session"]);         		//Formata sessão e salva em $session		
			$user['birthday'] = $newUser["register-birthday"];							//Formata aniv e salva em $birthday 
			$user['password'] = md5($newUser["register-password"]);               		//Formata senha e salva em $password        
			$user['email'] = $newUser["register-email"];								//Formata email e salva em $email
			$user['complement'] = formatNumber($newUser["register-complement"]);   		//Forma complmento e salva em $complement   
			$user['zipCode'] = formatNumber($newUser["register-zipCode"]);         		//Formata CEP e salva em $zipCode
			$user['addressNum'] = formatNumber($newUser["register-addressNum"]); 		//Formata End. e salva em $adress
			                        
			$zipCode['zipCode'] = formatNumber($newUser["register-zipCode"]);         	//Formata CEP e salva em $zipCode 
			$zipCode['neighborhood'] = formatText($newUser["register-neighborhood"]); 	//Formata bairro e salva em $neighborhood
			$zipCode['address'] = formatText($newUser["register-address"]);             //Formata End. e salva em $adress
			$zipCode['city'] = formatText($newUser["register-city"]);                 	//Formata cidade e salva em $city          
			$zipCode['state'] = formatText($newUser["register-state"]);					//Formata estado e salva em $state

			$address['complement'] = formatNumber($newUser["register-complement"]);   	//Forma complemento e salva em $complement   
			$address['zipCode'] = formatNumber($newUser["register-zipCode"]);         	//Formata CEP e salva em $zipCode
			$address['addressNum'] = formatNumber($newUser["register-addressNum"]);     //Formata Num End. e salva em $adressNum   
			                              
			// --------------------------------------------------------------


			

			if(!verifyUser($user, $conn))     				 	// Entra se user existe no BD, 1 se sim e 0 se não
			{

				if (!verifyAddress($address, $conn)) {     	 	// Entra se endereço existe no BD, 1 se sim e 0 se não
					
					if (!verifyZipCode($zipCode, $conn)) { 		// Entra se zipCode existe no BD, 1 se sim e 0 se não 
						
						insertZipCode($zipCode, $conn);     	// Insere zipCode no BD
					}

					insertAddress($address, $conn);         	// Insere endereço no BD
				}

				insertUser($user, $conn); 					    // Insere User no BD

			    echo("alert('Cadastro realizado com Sucesso!');");
				echo ("window.location.href = '../index.php';");

			}else{
				$error[] = -13;                //Retorna erro de usuario já cadastrado
			}
			

		}
}


if(isset($error))
{
	echo "$('#register-error').html('');";  
	$icon = "<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>";
	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);

		echo "$('#register-error').append('".$icon.$description."'<br/>);";
		
		}
}

mysqli_close($conn);



?>
