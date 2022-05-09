<?php 

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$search = new Search;

$result = $search->getAdressFromZipcode(13219462);

print_r($result);