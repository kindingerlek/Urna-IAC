<?php 
  
  /*
  * Título: Gerar Código
  *
  * Autor: Lucas Ernesto Kindinger
  * Data de Criação: 06/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Gera um código de 6 dígitos entre os caracteres a-z A-Z 0-9
  *
  */
  
  function generateCode()
  {
    $seed = ""; //Inicia com uma string vazia
    
    while(strlen($seed) < 6) //Enquanto o tamanho da string for menor que 6
    {
      $aux; //Variável que irá receber o caracter desta iteração
      
      switch(rand(1,3))
      {
        case 1:
          $aux = chr(rand(65,90)); //A-Z
          break;
          
        case 2:
          $aux = chr(rand(97,122)); //a-z
          break;
          
        default:
          $aux = chr(rand(48,57)); //0-9
          break;
      }
      
      $seed = $seed . $aux; // Concatena o carater ao $seed
    }
    
    return $seed;
  }
   
?>