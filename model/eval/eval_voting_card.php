<?php
 
  /*
  * Título: Valida Título de Eleitor
  *
  * Autor: Alisson e carlos
  * Data de Criação: 11/06/2015
  *
  * Modificado por:
  * Data de Modificação:
  * 
  * Descrição:  Verifica se título de elitor é válido cpom digito verificador
  *
  */

function evalVotingCard($votingCard)
{
    
    //Retira a máscara
    $votingCard = preg_replace('/[^0-9]/', '', $votingCard);

    //Preenchendo a string com 0s à esquerda para completar 12 digitos 
    $votingCard = str_pad($votingCard, 12, '0', STR_PAD_LEFT);
    
    //Identificando os dígitos referentes à unidade federativa
    $state = intval(substr($votingCard, 8, 2));

    if (strlen($votingCard) != 12 || $state < 1 || $state > 28) {
        return 0;
    } else {

        //Algorítmo para verificação de título eleitoral
        $add = 0;

        for ($i = 0; $i < 8; $i++) {
            $add += $votingCard[$i] * (9 - $i);
        }

        $add %= 11;

        if ($add < 2) {
            if ($state < 3) {
                $add = 1 - $add;
            } else {
                $add = 0;
            }
        } else {
            $add = 11 - $add;
        }

        if ($votingCard{10} != $add) {
            return 0;
        }

        $add *= 2;

        for ($i = 8; $i < 10; $i++) {
            $add += $votingCard[$i] * (12 - $i);
        }

        $add %= 11;

        if ($add < 2) {
            if ($state < 3) {
                $add = 1 - $add;
            } else {
                $add = 0;
            }
        } else {
            $add = 11 - $add;
        }

        if ($votingCard[11] != $add) {
            return 0;
        }

        return 1;
    }
}

?>