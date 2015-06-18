<?php
/*
* Título: Controle de Login
*
* Autor: Alisson e Carlos
* Data de Criação: 29/05/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição:  Recebe um usuario e uma senha via POST. 
*         Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

require_once($root.'model/delete/delete_data.php');

//Recebe dados via post

$idElection = $_POST["idElection"];


$conn = openDB();

deleteData('vagas', 'idEleicao', $idElection, $conn);
deleteData('candidatos', 'idEleicao', $idElection, $conn);
deleteData('eleicoes', 'idEleicao', $idElection, $conn);


echo ("alert('Eleição excluída.');");

mysqli_close($conn);

echo("location.reload();");

?>