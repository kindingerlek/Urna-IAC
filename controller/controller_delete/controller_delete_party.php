<?php
/*
* Título: Controle de Deleção de Partidos
*
* Autor: Alisson e Carlos
* Data de Criação: 18/06/2015
*
* Descrição:  Recebe os dados do partido a ser deletado e chama a função responsável pela deleção. 
*
* Dependências: 'model/open_db/open_db.php', 'model/delete/delete_data.php' 
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