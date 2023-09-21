<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

$user = (new User())->findById(6);
$user->nome = "Gugu";
$userId = $user->save();

var_dump($user);