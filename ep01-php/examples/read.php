<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = new User();

$list = $user->find()->fetch(true);

/** @var $itemList User */
foreach ($list as $itemList) {
    var_dump($itemList->data());

}

