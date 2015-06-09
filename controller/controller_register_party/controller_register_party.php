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
require_once($root.'controller/controller_register_party/controller_register_party_validate.php');

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
require_once($root.'model/verify/verify_party.php');

//Insert
require_once($root.'model/insert/insert_party.php');


 			
 			// $newParty['register-name'] = "Carlos" ;     
 			// $newParty['register-votingCard'] = "092255330604"; 
 			// $newParty['register-zone'] = "1234";       
 			// $newParty['register-session'] = "1234";    
 			// $newParty['register-cpf'] = "05829791960";    
 			// $newParty['register-birthday'] = "12/12/1996";   
    //         $newParty['register-zipCode'] = "83701485";    
    //         $newParty['register-address'] = "qualquer coisa";     
    //         $newParty['register-addressNum'] = "1005";  
    //         $newParty['register-neighborhood'] = "Costeira";
    //         $newParty['register-city'] = "Curitiba";      
    //         $newParty['register-state'] = "PR";
    //         $newParty['register-email'] = "Aslals@sajksjak.com";
    //         $newParty['register-complement'] = "Casa";     
    //         $newParty['register-password'] = "08071996";   
    //         $newParty['register-cfmPassword'] = "08071996"; 



//Recebe dados via post
$newParty = $_POST;


foreach ($newParty as $field => $data) {
	if(!evalField($data))
		{
			$error[] = -14;
			break;
			
		}
}


$conn = openDB();

if(!isset($error)) // SE NÃO HOUVER CAMPOS EM BRANCO CONTINUA
{
			$party['idParty'] = formatNumber($newParty["register-number"]); 				   		//Formata cpf e salva em $cpf
			$party['name'] =	formatText($newParty["register-name"]);                 		//Formata nome e salva em $name
			$party['acronym'] = formatNumber($newParty["register-acronym"]);   		            //Formata titulo e salva em $votingCard
			$idParty = $party['idParty'];

			$uploaddir = 'c:/wamp/www/Urna-IAC/resources/party_logo/';// definindo pasta de dowload de fotos
			$uploadFile = $uploaddir . basename("$idParty".".jpg");

			$party['logo'] =	$uploadFile; 
			

	$error = validatenewParty($party);
	
	if($error === 1) // Se não houver erros verifica se existe no BD
		{
			$error=null;
			
			if(!verifyParty($party, $conn))     				 	// Entra se Party existe no BD, 1 se sim e 0 se não
			{
				// upload do arquivo
			  
				insertParty($party, $conn); 					    // Insere Party no B

				//header('location:../../view/admin_manage_party.php');
				echo("Cadastro realizado com sucesso");
				echo("window.location.href = '#';");
			}else{
			
				$error[0] = -16;   
				             //Retorna erro de usuario já cadastrado
				//header('location:../../view/admin_manage_party.php');
			}
			
			
		}
}

move_uploaded_file($_FILES['register-logoInput']['tmp_name'], $uploadFile);
if(is_array($error))
{
	echo "$('#register-error').html('');";
	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);
		//echo $error[$i];
		echo "$('#register-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		echo "$('#register-error').show();";  
		echo "$('#register-error').append('".$description."<br/>');";
		
		}
}

mysqli_close($conn);
?>
