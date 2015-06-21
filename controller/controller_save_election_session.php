<?php
/*
* Título: Controlador de IdEleição
*
* Autor: Alisson 
* Data de Criação: 15/06/2015
*
* Descrição: Salva na session o id da eleição clicada ADMIN
*
*/

$idElection = $_POST['idElection'];
session_start();
$_SESSION['votebem']['idElection'] = $idElection; // salva na session o id da eleição

?>
