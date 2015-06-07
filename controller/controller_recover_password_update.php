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
* Descrição: 	Recebe um usuario e uma senha via POST. 
* 				Verifica se um login é válido e direciona para a a tela correspondente, se não, retorna erro 
*
*/

$root = 'c:/wamp/www/Urna-IAC/';

//Erro
require_once($root.'model/error/error.php');

//Open Db
require_once($root.'model/open_db/open_db.php');

//Eval
require_once($root.'model/eval/eval_field.php');

//Validate
require_once($root.'model/validate/validate_cpf.php');

//Format
require_once($root.'model/format/format_number.php');

//Verify
require_once($root.'model/verify/verify_user.php');

//Generate
require_once($root.'model/generate/generate_code.php');
require_once($root.'model/generate/generate_message.php');

//recover_password
require_once($root.'model/recover_password/send_email.php');
//Recebe dados via post


?>