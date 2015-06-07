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

//Verify
require_once($root.'model/verify/verify_Candidate.php');

//Insert
require_once($root.'model/insert/insert_Candidate.php');


 			
 			// $newCandidate['register-name'] = "Carlos" ;     
 			// $newCandidate['register-votingCard'] = "092255330604"; 
 			// $newCandidate['register-zone'] = "1234";       
 			// $newCandidate['register-session'] = "1234";    
 			// $newCandidate['register-cpf'] = "05829791960";    
 			// $newCandidate['register-birthday'] = "12/12/1996";   
    //         $newCandidate['register-zipCode'] = "83701485";    
    //         $newCandidate['register-address'] = "qualquer coisa";     
    //         $newCandidate['register-addressNum'] = "1005";  
    //         $newCandidate['register-neighborhood'] = "Costeira";
    //         $newCandidate['register-city'] = "Curitiba";      
    //         $newCandidate['register-state'] = "PR";
    //         $newCandidate['register-email'] = "Aslals@sajksjak.com";
    //         $newCandidate['register-complement'] = "Casa";     
    //         $newCandidate['register-password'] = "08071996";   
    //         $newCandidate['register-cfmPassword'] = "08071996"; 



//Recebe dados via post
$newCandidate = $_POST;


foreach ($newCandidate as $field => $data) {
	if(!evalField($data))
		{
			header('location:../../view/admin_manage_candidate.php');
			$error[] = -14;
			break;
			
		}
}


$conn = openDB();

if(!isset($error)) // SE NÃO HOUVER CAMPOS EM BRANCO CONTINUA
{
			$Candidate['idCandidate'] = formatNumber($newCandidate["register-number"]); 				   		//Formata cpf e salva em $cpf
			$Candidate['name'] =	formatText($newCandidate["register-name"]);                 		//Formata nome e salva em $name
			$Candidate['acronym'] = formatNumber($newCandidate["register-acronym"]);   		            //Formata titulo e salva em $votingCard
			$idCandidate = $Candidate['idCandidate'];
			



			$uploaddir = 'c:/wamp/www/Urna-IAC/resources/Candidate_logo/';// definindo pasta de dowload de fotos
			$uploadFile = $uploaddir . basename("$idCandidate".".jpg");

			$Candidate['logo'] =	$uploadFile; 
			

	$error = validatenewCandidate($Candidate);
	
	if($error === 1) // Se não houver erros verifica se existe no BD
		{
			$error=null;
			
			if(!verifyCandidate($Candidate, $conn))     				 	// Entra se Candidate existe no BD, 1 se sim e 0 se não
			{
				// upload do arquivo
			  
				insertCandidate($Candidate, $conn); 					    // Insere Candidate no B
				header('location:../../view/admin_manage_candidate.php');

			}else{
			
				$error[0] = -16;                //Retorna erro de usuario já cadastrado
				header('location:../../view/admin_manage_candidate.php');
			}
			
			
		}
}

move_uploaded_file($_FILES['register-logoInput']['tmp_name'], $uploadFile);
print_r($_FILES);

if(is_array($error))
{
	 //echo "$('#register-error').html('');";
	header('location:../../view/admin_manage_Candidate.php');
	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);
		echo $error[$i];
		// echo "$('#register-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
		// echo "$('#register-error').show();";  
		// echo "$('#register-error').append('".$description."<br/>');";
		
		}
}

mysqli_close($conn);
?>
