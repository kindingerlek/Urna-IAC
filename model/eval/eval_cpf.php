<?php

/*
* Título: Validador de CPF
*
* Autor: Carlos
* Data de Criação: 27/05/2015
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