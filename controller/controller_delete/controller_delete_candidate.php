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

require_once($root.'model/delete/delete_candidate.php');

//Recebe dados via post
$candidate = $_POST["idCandidate"];
$election = $_POST["idEleicao"];

$conn = openDB();

deleteCandidate($candidate, $election, $conn);

echo ("alert('Candidato excluído.');");

mysqli_close($conn);

echo("location.reload();");

?>