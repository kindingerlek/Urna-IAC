<?php
/*
* Título: Controlador de Deleção de Usuário
*
* Autor: Alisson e Carlos
* Data de Criação: 19/06/2015
*
* Descrição:  Recebe os dados do usuário a ser deletado e chama a função responsável pela deleção. 
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
$table = 'usuarios';
$idUser = $_POST["idUser"];
$column = 'cpf';


$conn = openDB();

deleteData($table, $column, $idUser, $conn);

echo ("alert('Eleitor excluído.');");

mysqli_close($conn);

echo("location.reload();");

?>