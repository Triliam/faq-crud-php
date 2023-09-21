<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Tema extends DataLayer
{
    /**
     * Tema constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("temas", ["tema"], "id_tema", true);
    }

    public function perguntas() {
        return (new Pergunta())->find("id_tema = :uid", "uid={$this->id}")->fetch(true);
    }
  
}