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

function generateMessage($code,$user)
{
return 

"<pre style='font-family:serif;font-size:12pt;'>Olá, ".$user['nome'].".

O código abaixo deve ser inserido no campo correspondente para completar o processo:

Código: $code 

Caso não tenha requisitado este código, ignore este email.

Atenciosamente, 
Equipe Vote Bem</pre>";
}


?>