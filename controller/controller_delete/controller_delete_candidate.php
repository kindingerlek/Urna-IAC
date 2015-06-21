<?php
/*
* Título: Controlador de Deleção de Candidato
*
* Autor: Alisson e Carlos
* Data de Criação: 15/06/2015
*
* Descrição:  Recebe os dados do candidato a ser deletado e chama a função responsável pela deleção. 
*
* Dependências: 'model/open_db/open_db.php', 'model/delete/delete_candidate.php' 
*
*/
$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

//Delete Candidate
require_once($root.'model/delete/delete_candidate.php');

//Recebe dados via post
$candidate = $_POST["idCandidate"];
$election = $_POST["idElection"];

//Acessando Banco de Dados
$conn = openDB();

deleteCandidate($candidate, $election, $conn);

echo ("alert('Candidato excluído.');");

//Encerrando conexão com o DB.
mysqli_close($conn);

echo("location.reload();");

?>