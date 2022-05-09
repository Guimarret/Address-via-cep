<?php

use PHPUnit\Framework\TestCase;
use Wead\DigitalCep\Search;

class SearchTeste extends TestCase{
    public function testGetAdressDefaultUsage(){
        $result = new Search;
        $result = $result->getAdressFromZipcode('01311000');

        $expected = [
            'cep'=> '01311-000',
            'logradouro'=> 'Avenida Paulista',
            'complemento'=> 'até 609 - lado ímpar',
            'bairro'=> 'Bela Vista',
            'localidade'=> 'São Paulo',
            'uf'=> 'SP',
            'ibge'=> '3550308',
            'gia'=> '1004',
            'ddd'=> '11',
            'siafi'=> '7107'
        ];

        $this->assertEquals($expected, $result);
    }
}