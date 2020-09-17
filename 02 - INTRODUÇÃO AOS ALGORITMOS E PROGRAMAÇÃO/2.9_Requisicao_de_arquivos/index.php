<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('2.9 - Requisição de Arquivos');
//commented by @jalexandrersilva

PHPClassSession('include, include_once', __LINE__);

// include "file.php";
// echo "<p>CONTINUE</p>";

//include "header.php";

include __DIR__ . "/header.php";    //inclui os códigos do arquivo no script atual
                                    //o DIR indica que o arquivo header está
                                    //na mesma pasta do index.php 


var_dump(__DIR__);                  //Mostra caminho absoluto da pasta
                                    // dentro do servidor web

/* Qual a diferença básica entre o include e o require?
   Observe que se o arquivo não existir, o programa irá continuar a 
   executar códigos.
   Se o require for utilizado e o arquivo estiver com nome errado
   ou caminho errado ele pára a execução do código (fatal error)
*/

$profile = new stdClass();
$profile->name = "Iury";
$profile->company = "IFTO";
$profile->email = "iury.oliveira@ifto.edu.br";
var_dump($profile);

include __DIR__ . "/profile.php";

var_dump(include_once __DIR__ . "/header.php");

$profile = new stdClass();  //construção do PHP orientado a objetos.
$profile->name = "Jose Roberto";
$profile->company = "IFTO";
$profile->email = "jose.roberto@ifto.edu.br";
var_dump($profile);         //O resultado é um objeto.

include_once __DIR__ . "/profile.php";  //O comando include criaria
                                        //novamente o objeto. O include_once
                                        //não inclui porque já houve uma inclusão
                                        //ou seja, um include. Ver detalhes vídeo 10.2
                                        //quando usa o include, gera requisição
                                        //extra, ou seja, o navegaor vai fazer nova
                                        //requisição ao servidor web.
PHPClassSession('require, require_once', __LINE__);
                                        //require-once só inclue uma única vez
// require "file.php";
// echo "<p>CONTINUE</p>";