<?php
 
  /*
  * Título: Insere Eleição
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um Eleição no BD
  *
  */

$root = 'c:/wamp/www/Urna-IAC/';

require_once($root.'model/format/format_text.php');

function insertElection($election,$conn)
{

$date=$election['date']; 		
$startTime=$election['startTime']; 
$endTime=$election['endTime']; 		
$type=formatText($election['type']); 			
$mayor=$election['mayor']; 			
$governor=$election['governor']; 		
$president=$election['president'];	
$vereador=$election['vereador']; 		
$stateDeputy=$election['stateDeputy']; 	
$federalDeputy=$election['federalDeputy'];
$senator=$election['senator'];



	$sql="INSERT INTO `eleicoes`(`horaInicio`, `data`, `horaFim`, `tipo`) 
	VALUES ('$startTime', '$date', '$endTime', '$type')";

	mysqli_query($conn,$sql);


	
		$sql = "SELECT `idEleicao` FROM eleicoes WHERE data = '$date';";
		$result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
		$idEleicao = $result["idEleicao"];
		$sql ="INSERT INTO `vagas` (`idEleicao`, `PREFEITO`, `GOVERNADOR`, `PRESIDENTE`, `SENADOR`, `DEPUTADO ESTADUAL`, `DEPUTADO FEDERAL`, `VEREADOR`)
		VALUES ('$idEleicao','$mayor', '$governor', '$president', '$senator', '$stateDeputy', '$federalDeputy', '$vereador');";
		//echo $sql;
		mysqli_query($conn,$sql);

	

	

}
?>