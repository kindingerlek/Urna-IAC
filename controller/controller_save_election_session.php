<?php
/*
* Título: salve election id in sesssion
*
* Autor: Alisson 
* Data de Criação: 15/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Salava na session o id da eleição clicada ADMIN
*
*/

$idElection = $_POST['idElection'];
session_start();
$_SESSION['votebem']['idElection'] = $idElection; // salva na session o id da eleição

?>
