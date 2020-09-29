<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de Arquivos');


PHPClassSession('include, include_once', __LINE__);

//include "file.php";
//echo "<p>CONTINUE</p>";


//include "header.php";

include __DIR__ . "/header.php";

var_dump(__DIR__);

$profile = new stdClass();
$profile->name = "André";
$profile->company = "UFMG";
$profile->email = "amarthins@gmail.com";
var_dump($profile);

include __DIR__ . "/profile.php";

var_dump(include_once __DIR__ . "/header.php");


$profile = new stdClass();
$profile->name = "João Gabriel";
$profile->company = "UFMG";
$profile->email = "Gabriels@gmail.com";
var_dump($profile);

include_once __DIR__ . "/profile.php";

PHPClassSession('require, require_once, once', __LINE__);



//require "file.php";
//cho "<p>CONTINUE</p>";