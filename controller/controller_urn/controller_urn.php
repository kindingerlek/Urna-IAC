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
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$electionType = $_SESSION["votebem"]["type"];
$electionOffices = $_SESSION["votebem"][$electionType];

$i=0;

while(!$electionOffices[$i] && $i<count($electionOffices)) { 
		$i++;
}

if($i == count($electionOffices)){
	header('Location: ../../view/thankyou.php');
	
}else{
	header('Location: ../../view/voter_urn.php');
	//header('Location: http://www.example.com/');

}


?>
