<?php

$root = 'c:/wamp/www/Urna-IAC/';
require_once($root."model/open_db/open_db.php");
require_once($root."model/format/format_number.php");
require_once($root."model/format/format_text.php");
/*
* Título: registerNewUser()
*
* Autor: Alisson
* Data de Criação: 05/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Formata os campos do novo usuarios, verifica se já existe o cpf cadastrado
*
* Entrada: Um Array hash com os dados de Usuario
*
* Saída: Usuario cadastrado no BD ou código de erro
*
* Valor de retorno: 1 se Cadastrado e um número negativo se erro
*
* Funções invocadas: open_session() e open_db();
* 
*   
*/


/*
 			- register-name         : Receberá o nome digitado;
            - register-votingCard  *: Receberá o título de eleitor;
            - register-zone        *: Receberá a zona do eleitor;
            - register-session     *: Receberá a seção do eleitor;
            - register-cpf         *: Receberá o CPF do eleitor;
            - register-birthday    *: Receberá a Data de Nascimento do Eleitor;
            - register-codeZip     *: Receberá o CEP do Usuário;
            - register-adress      *: Receberá o Endereço do Eleitor;
            - register-adressNum   *: Receberá o número do endereço do Eleitor;
            - register-neighborhood*: Receberá o Bairro do Eleitor;
            - register-city        *: Receberá a Cidade do Eleitor;
            - register-state       *: Receberá o estado do Eleitor;
            - register-password    *: Receberá a senha do Eleitor.
            - register-cfmPassword *: Receberá novamente a senha  // Inputs do form utilizadas

*/

function registerNewUser($newUser)
{

$cpf = $newUser["register-cpf"];// Atribuindo CPF a variavel
$cpf = formatNumber($cpf);      //Retirando Máscara

$connection = openDB(); // abre conexão com o BD
$sql = "SELECT * FROM USUARIOS WHERE CPF = '$cpf' "; // Monta a query
$result = mysqli_query($connection, $sql);          //Executa a query

//Se der falha na busca encerra
if (!$result)
	{
		mysqli_close($connection); //Fechar connection
		return -3;  // Erro de falha na busca
	}

//Se houver registro encerra
if(mysqli_num_rows($result)>=1)
	{
		mysqli_close($connection); //Fechar connection
		return -13; // Erro de Usuario já cadastrado 
	}


//Formata os capos para registrar no BD
$name =	formatText($newUser["register-name"]);
$votingCard = formatNumber($newUser["register-votingCard"]);   //Formata nome e salva em $name
$zone =	formatNumber($newUser["register-zone"]);               //Formata zona e salva em $zone
$session = formatNumber($newUser["register-session"]);         //Formata sessão e salva em $session		
$birthday = $newUser["register-birthday"];                     //Formata aniv e salva em $birthday     
$codeZip = formatNumber($newUser["register-codeZip"]);         //Formata CEP e salva em $codeZip 
$complement = formatNumber($newUser["register-complement"]);   //Forma complmento e salva em $complement   
$adress = formatText($newUser["register-adress"]);             //Formata End. e salva em $adress         
$adressNum = $newUser["register-adressNum"];                    //Formata Num End. e salva em $adressNum          
$neighborhood = formatText($newUser["register-neighborhood"]); //Formata bairro e salva em $neighborhood       
$city = formatText($newUser["register-city"]);                 //Formata nome e salva em $city          
$state = formatText($newUser["register-state"]);               //Formata estados e salva em $state       
$password = md5($newUser["register-password"]);                //Formata senha e salva em $password        
$email = $newUser["register-email"];                           //Formata email e salva em $email   



//---------------------------------------Cep-------------------------------------------------------------------------
$sql = "SELECT * FROM CEP WHERE CEP = '$codeZip' "; // Monta a query para pesquisar CEP

$result = mysqli_query($connection,$sql);

//Se der falha na busca encerra
if (!$result)
	{
		mysqli_close($connection); //Fechar connection
		return -3;  // Erro de falha na busca
	}

//Se não houver nenhum registro Cadastra novo CEP
if(mysqli_num_rows($result)==0)
	{

	$sql = "INSERT INTO `cep`(`cep`, `logradouro`, `bairro`, `cidade`, `estado`) VALUES ('$codeZip','$adress','$neighborhood','$city', '$state');";

    mysqli_query($connection, $sql); // Cadastra o Cep

	}

//------------------------------------------------------------------------------------------------------------------

//---------------------------------Endereço-------------------------------------------------------------------------
//Pesquisa Endereço
$sql = "SELECT * FROM `enderecos` WHERE `cep` = '$codeZip' AND `numero` = '$adressNum' AND `complemento` = '$complement';"; // Monta a query

$result = mysqli_query($connection, $sql);

//Se der falha na busca encerra
if (!$result)
	{
		mysqli_close($connection); //Fechar connection
		return -3;  // Erro de falha na busca
	}

//Se não houver nehum registro Cadastra novo Endereço
if(mysqli_num_rows($result)==0)
	{

	$sql = "INSERT INTO `enderecos`(`numero`, `complemento`, `cep`) VALUES ('$adressNum','$complement','$codeZip');";


    mysqli_query($connection,$sql); // Cadastra o Endereco

	}
//------------------------------------------------------------------------------------------------------------------

//---------------------------------Usuario-------------------------------------------------------------------------

$sql="INSERT INTO `usuarios` (`cpf`, `numero`, `email`, `cep`, `complemento`, `nome`, `tituloEleitor`,`zona`, `secao`, `senha`, `dtNasc`) 
VALUES ('$cpf','$adressNum','$email', '$codeZip','$complement','$name','$votingCard','$zone','$session','$password','$birthday')";

$result = mysqli_query($connection, $sql);   //Executa a query Cadastra o Usuario

//Se der falha na busca encerra
if (!$result)
	{
		mysqli_close($connection); //Fechar connection
		return -3;  // Erro de falha na busca
	}
//------------------------------------------------------------------------------------------------------------------

mysqli_close($connection);
return 1; // Retorna que o cadastro foi efetuado
}

?>