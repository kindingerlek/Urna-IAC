<?php 
  
  /*
  * Título: Elction Status
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica e retorna o satus da eleição
  *
  */
  
  function electionIsOpen()
  {
    $date = explode("-", date("Y-m-d", time()));

    $day = $date[2];
    $month = $date[1];
    $year = $date[0];
    
    $election['date'] = $day.'/'.$month.'/'.$year;

    return verifyElection($election);     

  }