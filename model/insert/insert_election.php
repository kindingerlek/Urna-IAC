<?php

/*
* Título: verifyAddress)
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se usuario existe no BD
*
* Entrada: Um campo de texto que deve ser um número
*
* Saída: 
*
* Valor de retorno:1 se valor válido e -0 se invalido
*
* Funções invocadas: nada
* 
*   
*/

function insertElection($election,$conn)
{

$date=$election['date']; 		
$startTime=$election['startTime']; 
$endTime=$election['endTime']; 		
$type=$election['type']; 			
$mayor=$election['mayor']; 			
$governor=$election['governor']; 		
$president=$election['president'];	
$vereador=$election['vereador']; 		
$stateDeputy=$election['stateDeputy']; 	
$federalDeputy=$election['federalDeputy'];
$senator=$election['senator'];



	$sql="INSERT INTO `eleicoes`(`horaInicio`, `data`, `horaFim`, `tipo`) 
	VALUES ('$startTime', '$date', '$endTime', '$type')";


	foreach ($election as $key => $value) {
		$sql.="INSERT INTO `vagas`(`idTipo`, `idEleicao`, `qtdeVagas`) 
		VALUES (`$key`,(SELECT `idEleicao` FROM eleicoes WHERE data = '$date'),`$value`)";

	}

	mysqli_query($conn,$sql);

}
?>