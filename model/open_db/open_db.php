<?php

/*
* Título: Abre Banco de Dados
*

* Autor:Carlos
* Data de Criação:28/05/2015
*
* Modificado por:Alisson
* Data de Modificação:29/05/2015
* 
* Descrição:		Cria conexão com o banco de dados
*
*/
function openDB(){


$con =mysqli_connect('localhost', 'root', 'root', 'votebem');
mysqli_query($con,'SET character_set_connection=utf8');
mysqli_query($con,'SET character_set_client=utf8');
mysqli_query($con,'SET character_set_results=utf8');

return $con;

}

?>