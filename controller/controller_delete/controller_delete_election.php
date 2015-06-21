<?php
/*
* Título: Controlador de Deleção de Eleição
*
* Autor: Alisson e Carlos
* Data de Criação: 18/06/2015
*
* Descrição:  Recebe os dados da eleição a ser deletada e chama a função responsável pela deleção. 
*
* Dependências: 'model/open_db/open_db.php', 'model/delete/delete_data.php' 
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

//Delete Data
require_once($root.'model/delete/delete_data.php');

//Recebe dados via post
$idElection = $_POST["idElection"];


$conn = openDB();


//Deleta a Eleição e e tudo a ela relacionada
deleteData('vagas', 'idEleicao', $idElection, $conn);
deleteData('candidatos', 'idEleicao', $idElection, $conn);
deleteData('eleicoes', 'idEleicao', $idElection, $conn);


echo ("alert('Eleição excluída.');");

mysqli_close($conn);

echo("location.reload();");

?>