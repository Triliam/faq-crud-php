<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Resposta extends DataLayer
{
    /**
     * Resposta constructor.
     */
    public function __construct()
    {
        //string "TABLE_NAME", array ["REQUIRED_FIELD_1", "REQUIRED_FIELD_2"], string "PRIMARY_KEY", bool "TIMESTAMPS"
        parent::__construct("respostas", ["id_pergunta", "resposta"], "id_resposta", true);
    }

  public function add(Pergunta $pergunta, string $resposta) : Resposta {

    $this->id_pergunta = $pergunta->id_pergunta;
    $this->resposta = $resposta;
    return $this;
  }
}