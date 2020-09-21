<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de Arquivos');


PHPClassSession('include, include_once', __LINE__);

// include "file.php";
// echo "<p>CONTINUE</p>";

//include "header.php";

include __DIR__ . "/header.php";

var_dump(__DIR__);

$profile = new stdClass();
$profile->name = "Iury";
$profile->company = "IFTO";
$profile->email = "iury.oliveira@ifto.edu.br";
var_dump($profile);

include __DIR__ . "/profile.php";

var_dump(include_once __DIR__ . "/header.php");

$profile = new stdClass();
$profile->name = "Jose Roberto";
$profile->company = "IFTO";
$profile->email = "jose.roberto@ifto.edu.br";
var_dump($profile);

include_once __DIR__ . "/profile.php";

PHPClassSession('require, require_once', __LINE__);

// require "file.php";
// echo "<p>CONTINUE</p>";