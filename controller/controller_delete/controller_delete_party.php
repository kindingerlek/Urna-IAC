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

$root = 'c:/wamp/www/Urna-IAC/';

//Open Db
require_once($root.'model/open_db/open_db.php');

require_once($root.'model/delete/delete_data.php');

//Recebe dados via post

$table = 'partidos';
$idParty = $_POST["idParty"];
$column = 'idPartido';


$conn = openDB();

deleteData($table, $column, $idParty, $conn);

echo ("alert('Partido excluído.');");

mysqli_close($conn);

echo("location.reload();");

?>