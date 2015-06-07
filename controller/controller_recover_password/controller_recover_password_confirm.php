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

//Eval
require_once($root.'model/eval/eval_field.php');

$code = $_POST["recover-code"];
$codeCfm =$_SESSION["votebem"]["code"];


//Recebe dados via post


?>