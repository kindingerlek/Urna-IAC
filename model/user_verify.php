<?php
/**/


/*
* Título:
*
* Autor: Alisson
*
* Data de Criação:
* Última modificação:
* Modificado por:
* 
* Descrição: 	Verifica se dados são válidos
*				Caso sejam inválidos chama a função erro
*				Chama a função verifyId();
*				Chama a função openSession();
*				Direciona para tela correspondente
*
* Entrada:  $_POST["Id"], $_POST["senha"]
*
* Saída: Erro ou Redirecionamento para a a tela correspondente
*
* Valor de retorno: 
*
*/
function validateUser(){


};


/*
* Título:
*
* Autor:Carlos
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se um CPF é válido
*
* Entrada: Um CPF, uma sequencia de 11 números, ex:99999999999
*
* Saída: Valor númerico, 1 caso CPF válido, 0 caso CPF inválido
*
* Valor de retorno: 1 ou 0
*
* Funções invocadas: Nenhuma
*
*/
function evalCPF();



/*
* Título:
*
* Autor:Alisson
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe Id, verifica se é eleitor ou admin, se o registro existe no BD e se a senha está correta 
*
* Entrada: $_POST["id"], $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@, verifyPw()  
*
*/
function verifyId();




/*
* Título:
*
* Autor:Carlos
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: REcebe senha e verifica se é compativel à cadastrada no BD
*
* Entrada: $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@  
*
*/
function verifyPW();


/*
* Título:
*
* Autor:Alisson
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Recebe Id, verifica se é eleitor ou admin, se o registro existe no BD e se a senha está correta 
*
* Entrada: $_POST["id"], $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@, verifyPw()  
*
*/
function openSession();




/*
* Título:
*
* Autor:Carlos
* Data de Criação:
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: REcebe senha e verifica se é compativel à cadastrada no BD
*
* Entrada: $_POST["senha"] 
*
* Saída: Valor númerico 0 se ID inválido, 1 Id válido de eleitor e 2 Id válido de administrador
*
* Valor de retorno: 0, 1 ou 2 
*
* Funções invocadas: @@@@@FUTURA FUNÇÃO DE IBD@@@@@  
*
*/
function error();
?>