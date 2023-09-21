<?php

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Pergunta;
use Source\Models\Resposta;
use Source\Models\Tema;

$tem = new Tema();
$tem->tema = "DSM";
$tem->save();
var_dump($tem);

$per = new Pergunta();
$per->add($tem, "Quem é a Rainha?");
$per->save();
var_dump($per);

$res = new Resposta();
$res->add($per, "MÁRCIA!");
$res->save();
var_dump($res);

