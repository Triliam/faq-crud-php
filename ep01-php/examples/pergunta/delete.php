<?php

require __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Pergunta;
use Source\Models\Resposta;


$per = (new Pergunta())->findById(4);
$res = (new Resposta())->findById(4);
if($per) {
    $res->destroy();
    $per->destroy();
    
} else {
    var_dump($per);
}
