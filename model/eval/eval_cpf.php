<?php

  /*
  * Título: Valida CPF
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição: 	Verifica se CPF é válido
  *
  */
  
function evalCPF($CPF){

	//Verifica se a string possui 11 caracteres
	if (strlen($CPF) != 11){
		return 0;
	//Verifica se alguma sequencia invalida foi digitada	
	} else if (	$CPF == '00000000000' || 
				$CPF == '11111111111' || 
				$CPF == '22222222222' || 
				$CPF == '33333333333' || 
				$CPF == '44444444444' || 
				$CPF == '55555555555' || 
				$CPF == '66666666666' || 
				$CPF == '77777777777' || 
				$CPF == '88888888888' || 
				$CPF == '99999999999') {
        return 0;
     //Verifica se o CPF é válido
     } else {
		for ($total = 9; $total < 11; $total++) {   
	        $soma = 0;
	        for ($digito = 0; $digito < $total; $digito++) {
	            $soma += $CPF[$digito] * (($total + 1) - $digito);
	        }
	        $soma = ((10 * $soma) % 11) % 10;
	        if ($CPF[$digito] != $soma) {
	            return 0;
	        }
	    }
	    return 1;
    }
};
?>