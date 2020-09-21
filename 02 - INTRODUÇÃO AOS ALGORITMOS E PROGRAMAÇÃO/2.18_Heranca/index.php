<?php

declare(strict_types=1);

use classes\Address;
use classes\Event;
use classes\EventLive;
use classes\EventOnline;

require __DIR__ . '/../framework/config.php';
require_once __DIR__ . '/../vendor/autoload.php';
PHPClassName('2.18 - Herança');

PHPClassSession('Classe Pai', __LINE__);

$eventPai = new Event(
    "LIVE TIRA DUVIDAS",
    new DateTime("2020-09-21 20:00"),
    5000,
    4
);

var_dump($eventPai);

$eventPai->register("Iury Gomes", 'iury.oliveira@ifto.edu.br');
$eventPai->register("Jose Roberto", 'jose.roberto@ifto.edu.br');
$eventPai->register("Fernando Arantes", 'fernando.arantes@ifto.edu.br');
$eventPai->register("Daniel Canoli", 'daniel.canoli@ifto.edu.br');
$eventPai->register("Luciano Ribeiro", 'luciano.ribeiro@ifto.edu.br');

PHPClassSession('Classe Filha', __LINE__);

$address = new Address("Rua das Pitombeiras", 20, 'Proximo a UFT');

$eventFilho = new EventLive(
    "LIVE TIRA DUVIDAS",
    new DateTime("2020-09-21 20:00"),
    5000,
    4,
    $address
);

var_dump($eventFilho);

$eventFilho->register("Iury Gomes", 'iury.oliveira@ifto.edu.br');
$eventFilho->register("Jose Roberto", 'jose.roberto@ifto.edu.br');
$eventFilho->register("Fernando Arantes", 'fernando.arantes@ifto.edu.br');
$eventFilho->register("Daniel Canoli", 'daniel.canoli@ifto.edu.br');
$eventFilho->register("Luciano Ribeiro", 'luciano.ribeiro@ifto.edu.br');


PHPClassSession('Polimorfismo', __LINE__);

$eventOnLine = new EventOnline(
    "LIVE TIRA DUVIDAS",
    new DateTime("2020-09-21 20:00"),
    5000,
    "https://google.classroom"
);

var_dump($eventOnLine);

$eventOnLine->register("Iury Gomes", 'iury.oliveira@ifto.edu.br');
$eventOnLine->register("Jose Roberto", 'jose.roberto@ifto.edu.br');
$eventOnLine->register("Fernando Arantes", 'fernando.arantes@ifto.edu.br');
$eventOnLine->register("Daniel Canoli", 'daniel.canoli@ifto.edu.br');
$eventOnLine->register("Luciano Ribeiro", 'luciano.ribeiro@ifto.edu.br');