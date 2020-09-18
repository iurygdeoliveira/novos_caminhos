<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de arquivos');


PHPClassSession('include, include_once', __LINE__);

include "file.php";
echo "<p>CONTINUE</p>";
// O include, mesmo que ele tenha algum problema na hora de carregar
// algum arquivo, ele vai continuar executando o codigo. O mesmo não
// ocorre com o require como exemplificado na linha 30

//include "header.php";

include __DIR__ . "/header.php";

var_dump(__DIR__); // O __DIR__ retorna o caminho absoluto do diretorio

$profile = new stdClass();
$profile->name = "Thiago Sartori";
$profile->company = "IFTO";
$profile->email = "thiagosartori@live.com";
var_dump($profile);

include_once __DIR__ . "/profile.php";

PHPClassSession('require, require_once', __LINE__);

require "file.php";
echo "<p>CONTINUE</p>";