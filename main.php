<?php

function mask($val, $mask)
{
    $dataMaskared = '';
    $p = 0;
    for ($a = 0; $a <= strlen($mask) - 1; ++$a) {
        if ($mask[$a] == '#') {
            if (isset($val[$p])) {
                $dataMaskared .= $val[$p++];
            }
        } else {
            if (isset($mask[$a])) {
                $dataMaskared .= $mask[$a];
            }
        }
    }

    return $dataMaskared;
}


$cnpj = '11222333000199';
$cpf = '00100200300';
$cep = '08665110';
$data = '10102010';
$hora = '021050';


// Examples of how to use
// echo mask($cnpj, '##.###.###/####-##').'<br>';
// echo mask($cpf, '###.###.###-##').'<br>';
// echo mask($cep, '#####-###').'<br>';
// echo mask($data, '##/##/####').'<br>';
// echo mask($data, '##/##/####').'<br>';
// echo mask($data, '[##][##][####]').'<br>';
// echo mask($data, '(##)(##)(####)').'<br>';
// echo mask($hora, 'Agora são ## horas ## minutos e ## segundos').'<br>';
// echo mask($hora, '##:##:##');
?>