<?php
/*
* Título: Controlador de Envio de Código de Recuperação de Senha.
*
* Autor: Alisson e Carlos
* Data de Criação: 10/06/2015
*
* Descrição:  Envia código de recuperação de senha por email caso o cpf digitado seja encontrado na base de dados.
*			  Caso contrário retorna erro. 
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Erro
require_once($root.'model/error/error.php');

//Open Db
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

//Validate
require_once($root.'model/validate/validate_cpf.php');

//Format
require_once($root.'model/format/format_number.php');

//Verify
require_once($root.'model/verify/verify_user.php');

//Generate
require_once($root.'model/generate/generate_code.php');
require_once($root.'model/generate/generate_message.php');

//recover_password
require_once($root.'model/recover_password/send_email.php');
//Recebe dados via post

$cpf = $_POST['recover-cpf'];



if(!evalField($cpf)) //Verifica se esta vazio
	{
		$error[] = -14;//Campos em Branco
	}

$conn = openDB();

if(!isset($error)) // SE NÃO HOUVER CAMPOS EM BRANCO CONTINUA
{

	$isValid = validateCPF($cpf, $conn);
	if(!$isValid)
	{
		$error[] = -1;//CPF Inválido
	}

	if(!isset($error)) // Se não houver erros verifica se existe no BD
		{
			// Atribui a arrayhash os campos dos dados recebidos de $newUser separando em seus rescptivos tipos

			$user['cpf'] = formatNumber($cpf); 				   		//Formata cpf e salva em $cpf


			$result = verifyUser($user, $conn);     		// Entra se user existe no BD, 1 se sim e 0 se não
			if($result)
			{
				$row = mysqli_fetch_assoc($result);
				$email = $row['email'];
				$code = generateCode();
				if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
				$_SESSION["votebem"]["code"] = $code;
				$_SESSION["votebem"]["cpf"] = $cpf;

				$msg = generateMessage($code,$row);				

				smtpmailer($email,"totheworldgroup@gmail.com","VoteBem","Redefinir senha Vote Bem",$msg);
				
				echo "$('#recover-success').show();";  
				echo "$('#recover-success').html('Email enviado!');";

			}else{
				$error[] = -2; //Retorna erro de usuario já cadastrado
			}
			

		}
}

if($error[0]<0)
{
	echo "$('#recover-error').html('');"; 
	$icon = "<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>";
	for ($i=0; $i<count($error); $i++) {

		$description = error($error[$i],$conn);

		echo "$('#recover-error').append('".$icon.$description."'<br/>);";
		
		}
}

mysqli_close($conn);

?>
