<?php


  /*
  * Título: Gera Ticket
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição:  Definição da classe de ticket
  *
  */

require('../model/open_db/open_db.php');
class Ticket
{
    public $name;                      // > Nome do Eleitor
    public $votingCard;                // > Número do Titulo do Eleitor
    public $zone;                      // > Número da zona eleitoral
    public $session;                   // > Número da seção
    public $birthday;                  // > Data de Nascimento do Eleitor;
    public $cpf;
    
    public $idElection;                // > Código da eleição
    public $electionDate;              // > Data da eleição    
    public $attendance;                // > Data e hora do comparecimento
    
    public function Ticket()
    {
      if(!isset($_SESSION)) 
  		{ 
	      session_start(); 
  		} 
      
      $this->cpf = $_SESSION["votebem"]['cpf'];
      $this->idElection = $_SESSION["votebem"]['election'];
      
      $this->cpf = preg_replace('/[^0-9]/', '', $this->cpf);
      // Busca os dados da Eleicao
      $conn = openDB();
      
      $this->setVoterData($this->cpf, $conn); // Busca os dados do Eleitor
      $this->setElectionData($this->idElection, $conn); // Busca os dados do Eleitor
      $this->setAttendance($this->cpf, $this->idElection, $conn);
      
      mysqli_close($conn);     
    }
    
    // Busca os dados do Eleitor
    function setVoterData($cpf, $conn)
    { 
      $sql = "SELECT * FROM `usuarios` WHERE `cpf` = '$cpf'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);      
      
      
      $this->name = $row['nome'];
      $this->votingCard = $row['tituloEleitor'];
      $this->zone = $row['zona'];
      $this->session = $row['secao'];      
      $this->birthday = $row['dtNasc'];
    }
    
    // Busca os dados da Eleicao    
    function setElectionData($idElection, $conn)
    {      
      $sql = "SELECT * FROM `eleicoes` WHERE `idEleicao` = '$idElection'";
      $result = mysqli_query($conn,$sql);      
      $row = mysqli_fetch_assoc($result);
      
      $this->electionDate = $row['data']; 
    }
    
    // Busca os dados do comparecimento
    function setAttendance($cpf, $idElection, $conn)
    {
      $sql = "SELECT * FROM `ticket` WHERE `idEleicao` = '$idElection' AND `cpf`= '$cpf'";
      $result = mysqli_query($conn,$sql);      
      $row = mysqli_fetch_assoc($result);
      
      $this->attendance = $row['data'];
    }    
}

?>