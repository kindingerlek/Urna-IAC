<?php
 
  /*
  * Título: Insere endereço
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Insere um endereço no BD
  *
  */

function insertAddress($address,$conn)
{

	$complement = $address['complement']; 
	$codeZip = $address['zipCode'];
	$addressNum =$address['addressNum']; 
	$sql = "INSERT INTO `enderecos`(`numero`, `complemento`, `cep`) VALUES ('$addressNum','$complement','$codeZip');";
	$return = mysqli_query($conn,$sql);

}

?>
