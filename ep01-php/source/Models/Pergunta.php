<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Pergunta extends DataLayer
{
    /**
     * Pergunta constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("perguntas", ["id_tema", "pergunta"], "id_pergunta", true);
    }

    public function respostas() {
        return (new Resposta())->find("id_pergunta = :uid", "uid={$this->id}")->fetch(true);
    }

    public function add(Tema $tema, string $pergunta) : Pergunta {

        $this->id_tema = $tema->id_tema;
        $this->pergunta = $pergunta;
        return $this;
      }
  
}