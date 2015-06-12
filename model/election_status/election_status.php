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
  
  function electionStatus($election)
  {
    
    $date = explode("/", $election['data']);

    $day = $date[0];
    $month = $date[1];
    $year = $date[2];
    
    $startTime = explode(":", $election['horaInicio']);
    $startHour = $startTime[0];
    $startMin = $startTime[1];

    $endTime = explode(":", $election['horaFim']);
    $endHour = $endTime[0];
    $endMin = $endTime[1];


    // Verifica se eleição já passou
    if(time() < mktime( $startHour, $startMin, 0, $month, $day, $year ) )
    {
      return "AGENDADA";
    }

    // Verifica se eleição está agendada
    if(time() > mktime( $endHour, $endMin, 0, $month, $day, $year ))
    {
      return "FINALIZADA";
    }

    // Retorna que eleição esta agendada
    return "INICIADA";     

  }