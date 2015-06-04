<?php

/*
* Título:
*

* Autor:Carlos
* Data de Criação:28/05/2015
*
* Modificado por:Alisson
* Data de Modificação:29/05/2015
* 
* Descrição:		Cria conexão com o banco de dados
* Entrada: 
*
* Saída: objeto do tipo conexão com o banco de dados 
*
* Valor de retorno:  
*
* Funções invocadas: Nenhuma  
*
*/
function openDB(){

	return mysqli_connect('localhost', 'root', 'root', 'votebem');

}

?>