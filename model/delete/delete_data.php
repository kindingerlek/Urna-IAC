<?php
/*
  * Título: Deleta registro
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Deleta um registro do bD
  *
  */

function deleteData($table, $column, $primary, $conn)
{

	
	$sql = "DELETE FROM `$table` WHERE `$column` = '$primary';"; // Monta a query
	
	mysqli_query($conn, $sql);          //Executa a query

}
?>