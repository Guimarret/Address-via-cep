<?php 

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode(13218040);

print_r($resultado);