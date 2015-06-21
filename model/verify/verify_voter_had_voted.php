<?php
  
/*
* Título: vVerifica Eleitor já votou
*
* Autor: Lucas
* Data de Criação: 16/06/2015
*
* Modificado por:
* Data de Modificação:
* 
* Descrição: Verifica se exite o registro de votação no sistema
*   
*/

  $root = 'c:/wamp/www/Urna-IAC/';
  require_once($root.'model/open_db/open_db.php');

  function verifyVoterHadVoted($cpf ,$idElection)
  {
    $conn = openDB();
    $return = false;                              //variável que armazenará o retorno;
    
    $cpf = preg_replace('/[^0-9]/', '', $cpf);   //Elemina qualquer coisa que seja diferente de numeros
    
    $sql = "SELECT * FROM `ticket` WHERE `cpf` = '$cpf' AND `idEleicao` = '$idElection'";    
    
    $result = mysqli_query($conn, $sql);
    
      if(mysqli_fetch_assoc($result) != false) // Testa se o result está vazio, ou não e altera o retorno.
        $return = true;
    
    // Fecha a conexão e realiza o retorno da função;  
    mysqli_close($conn);
    return $return;
  }
  
  
?>