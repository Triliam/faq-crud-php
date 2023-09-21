<?php

require_once __DIR__ . "/../../vendor/autoload.php";

use Source\Models\Tema;
use Source\Models\Pergunta;
use Source\Models\Resposta;

$tem = new Tema();
$per = new Pergunta();
$res = new Resposta();

$list = $tem->find()->fetch(true);
$listRes = $res->find()->fetch(true);
$listPer = $per->find()->fetch(true);

//  /** @var $itemList Tema */
foreach ($list as $itemList) {
    var_dump($itemList->data());
}
foreach($listPer as $perg) {
        var_dump($perg->data());
}

foreach($listRes as $resp){
        var_dump($resp->data());
}


    
  
