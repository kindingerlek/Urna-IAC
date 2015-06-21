<?php

 
  /*
  * Título: Insere CEP
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um CEP no BD
  *
  */

function insertZipCode($zipCode,$conn)
{
	$zip = $zipCode['zipCode'];
	$neighborhood = $zipCode['neighborhood']; 
	$address = $zipCode['address'];
	$city = $zipCode['city'];
	$state = $zipCode['state'];

	$sql = "INSERT INTO `cep`(`cep`, `logradouro`, `bairro`, `cidade`, `estado`) VALUES ('$zip','$address','$neighborhood','$city', '$state');";
	mysqli_query($conn,$sql);
}
?>