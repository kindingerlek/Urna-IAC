<?php

  /*
  * Título: erros
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: Busca a descrição do erro no bd e o retorna
  *
  */
  
function error($codigo, $conn){


	$sql="SELECT * FROM erros WHERE cod = '$codigo'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);
		
	//Retornando erro
	return $row["descricao"];
	
};
?>