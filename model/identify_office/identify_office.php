<?php

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
