<?php

/*
* Título:
*
* Autor: Carlos
* Data de Criação: 28/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe senha e verifica se é compativel à cadastrada no BD
*
* Entrada: $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@  
*
*/
function error($codigo){

	//Criando conexão com o DB
	$conn = openDB();

	$sql="SELECT * FROM erros WHERE cod = '$codigo'";

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_assoc($result);

	mysqli_close($conn);
		
	//Retornando erro
	return $row["descricao"];
	echo $row["descricao"];
	
};
?>