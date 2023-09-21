<?php

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Pergunta;

$per = (new Pergunta())->findById(4);
$per->pergunta = "Sofye";
$perId = $per->save();

var_dump($per);