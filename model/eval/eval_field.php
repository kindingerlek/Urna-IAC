<?php
/*
* Título: textVerify()
*
* Autor: Alisson
* Data de Criação: 05/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata e verifica um campo do tipo texto
*
* Entrada: Um campo de texto que deve ser verificado
*
* Saída: 
*
* Valor de retorno:1 se valor válido e -0 se invalido
*
* Funções invocadas: evalText() e formatText();
* 
*   
*/

function evalField($data)
{

if($data == "")
	return 0; // retorna 0 se texto invalido
return 1;    //retorna 1 se texto é válido

}
?>