<?php
  /*
  * Título: Valida campo
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica se o campo está preenchido
  *
  */

function evalField($data)
{

if($data == "")
	return 0; // retorna 0 se texto invalido
return 1;    //retorna 1 se texto é válido

}
?>