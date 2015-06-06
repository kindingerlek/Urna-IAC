<?php  
  function get_seed()
  {
    $seed = "";
    
    while(strlen($seed) < 6)
    {
      $aux; 
      
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
      
      $seed = $seed . $aux;
    }
    
    return $seed;
  }
  
  echo get_seed();  
?>