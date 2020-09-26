<?php

declare(strict_types=1);

use classes\Address;
use classes\Company;

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.16 - Relacionamento entre objetos');

/*
* É a associação mais comum entre objetos, onde o objeto hospede terá um atributo
* que receberá um outro objeto 
*/
PHPClassSession('Associação', __LINE__);

$company = new Company();
$company->bootCompany("IFTO", "Tocantins");

var_dump($company);

$address = new Address("Av. Paraguaia", 339, "Proximo a Universidade federal do tocantins");
$company->boot("IFTO", $address);

var_dump($company);