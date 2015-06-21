<?php

 
  /*
  * Título: Insere Partido
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um Partido no BD
  *
  */
  
function insertParty($party,$conn)
{
	$idParty = $party['idParty'];	  
	$name = $party['name'];
	$acronym = $party['acronym'];
	$logo=$party['logo'];
	

	$sql="INSERT INTO `partidos`(`idPartido`, `nome`, `sigla`, `logo`) 
	VALUES ('$idParty','$name','$acronym','$logo')";
	mysqli_query($conn,$sql);

}
?>