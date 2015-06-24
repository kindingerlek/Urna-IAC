<?php

/*
* Título: Selecionar
*
* Autor: Alisson
* Data de Criação: 06/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Seleciona um Registro do BD;
*
*   
*/

function select($table, $column, $param, $conn)
{
	if($param == ''){
		$sql = "SELECT * FROM `$table`;";  // Monta a query
	}
	else{
		$sql = "SELECT * FROM `$table` WHERE `$column` LIKE '$param';"; // Monta a query
	}

	$result = mysqli_query($conn, $sql);          //Executa a query

	//Se houver registro encerra
	if(mysqli_num_rows($result)>=1)
		{
			
			return $result; // Erro de Usuario já cadastrado 
		}

	return 0;
}

?>