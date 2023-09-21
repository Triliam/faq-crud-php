<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;


$user = new User();
$user->nome = "gustavo";
$user->email = "jonjon@gmail.com";
$user->senha = "1235";
$user->save();



var_dump($user);


