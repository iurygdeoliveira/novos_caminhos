<?php
require __DIR__ . '/../framework/config.php';
PHPClassName('Aula 10 - Trabalhando com funções');
//commentend by @jalexandrersilva

/* Para que as funções funcionem nesse arquivo, foi criado um arquivo functions.php
//dentro d pastas e o mesmo foi incluido aqui abaixo pelo comando require */
require __DIR__ . '/functions.php';

PHPClassSession("functions", __LINE__);     
/* Observe no arquivo functios.php que são 3 argumentos necessários pra função funcionar
ao chamar functionName esse manda esses argumentos e cria uma arra*/
var_dump(functionName("IFTO", "NOVOS CAMINHOS", 'PROGRAMADOR WEB'));

/*Na linha abaixo está repetindo a execução do código mais de uma vez
As funções fazem com que os códigos não sejam repetidos... e executados
dentro de uma função */
var_dump(functionName("Iury", "Pedrinha", 'Jade'));

// var_dump(calcIMC(86, 1.72));
// var_dump(calcIMC(90, 1.89));
// var_dump(calcIMC(100, 2));

PHPClassSession("global access", __LINE__);

//argumentos da função calcIMC_Global definida no arquivo functions.php
$weight = 91;
$height = 1.90;

var_dump(calcIMC_Global());
/*Você pude aplicar a reutilização de códigos e
criação de códigos específicos necessários sem preciar repetir
os códigos*/
PHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(150);
$pay = payTotal(500);

var_dump($pay);

PHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam());
var_dump(myTeam("Fernando"));
var_dump(myTeam("Fernando", "Iury"));
var_dump(myTeam("Fernando", "Iury", "Daniel"));