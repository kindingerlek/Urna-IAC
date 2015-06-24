<?php
 
  /*
  * Título: Identifica Cargo
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Identifica o cargo do a ser votando utilizando os dados salvos em session
  *
  */

function identifyOffice(){

	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$electionType = $_SESSION["votebem"]["type"];
$electionOffices = $_SESSION["votebem"][$electionType];

for ($i=0; $i<count($electionOffices); $i++) { 
	if($electionOffices[$i]){
		echo $electionOffices[$i];
		break;
	}
}}

?>
