<?php

namespace Wead\DigitalCep;

class search{
    private $url = "https://viacep.com.br/ws/";
    public function getAdressFromZipcode(string $zipCode): array{
        $zipCode = preg_replace('/["^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . "01311000" . "/json");

        return (array) json_decode($get);
    }
}

