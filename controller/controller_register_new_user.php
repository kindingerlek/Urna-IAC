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

// Dependências
require_once('c://wamp/www/Urna-IAC/model/validate_new_user/validate_new_user.php');
require_once('c://wamp/www/Urna-IAC/model/error/error.php');
require_once('c://wamp/www/Urna-IAC/model/register_new_user/register_new_user.php');

/*
 			$newUser['register-name'] = "Alisson Krul" ;     
 			$newUser['register-votingCard'] = "093255330604"; 
 			$newUser['register-zone'] = "1234";       
 			$newUser['register-session'] = "1234";    
 			$newUser['register-cpf'] = "01234567890";    
 			$newUser['register-birthday'] = "12/12/1996";   
            $newUser['register-codeZip'] = "83701485";    
            $newUser['register-adress'] = "qualquer coisa";     
            $newUser['register-adressNum'] = "993";  
            $newUser['register-neighborhood'] = "Costeira";
            $newUser['register-city'] = "Curitiba";      
            $newUser['register-state'] = "PR";
            $newUser['register-email'] = "Aslals@sajksjak.com";
            $newUser['register-complement'] = "CAsa";     
            $newUser['register-password'] = "08071996";   
            $newUser['register-cfmPassword'] = "08071996"; 
  
*/
$newUser = $_POST;

$return = validateNewUser($newUser);
echo "$('#register-error').html('');";
if($return === 1)
	{
		// echo "alert('Entrei');";
		$return = registerNewUser($newUser);
		if($return === 1)
		{
			echo("alert('Cadastro realizado com Sucesso!');");
			echo ("window.location.href = '../index.php';");
		}else
		{
			$description = error($return);
			echo "$('#register-error').html('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
			echo "$('#register-error').show();";
			echo "$('#register-error').append('".$description."<br />');";	
		
		}
		
	
	}else
	
	{

		for ($i=0; $i<count($return); $i++) {

			$description = error($return[$i]);
		
			echo "$('#register-error').append('<span class=".'"glyphicon glyphicon-exclamation-sign"'."aria-hidden=".'"true"'."></span>');";
			echo "$('#register-error').show();";
			echo "$('#register-error').append('".$description."<br />');";
		}

	}
?>