<?php

declare(strict_types=1);

use source\Address;
use source\Company;
use source\User;

require __DIR__ . '/../framework/config.php';
PHPClassName('2.15 - Carregamento Automatico de Classes');

PHPClassSession('Autoload com composer', __LINE__);

require_once __DIR__ . "/vendor/autoload.php";

$user = new User();
$adress = new Address();
$company = new Company();

var_dump($user, $adress, $company);