<?php 
  
  /*
  * Título: Eleição aberta?
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica e se a eleição esta com o status de Aberta
  *
  */
  require_once('c://wamp/www/Urna-IAC/model/verify/verify_election.php');
  
  function electionIsOpen()
  {

    $time = time()-(60*60*5);
    $date = explode("-", date("Y-m-d", $time));

    $day = $date[2];
    $month = $date[1];
    $year = $date[0];
    
    $election['date'] = $day.'/'.$month.'/'.$year;

    $conn = openDB();

    return verifyElection($election, $conn);

    mysqli_close($conn);     

  }