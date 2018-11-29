<?php

class TipoAtividade
{
    public $id_tipo_atividade;
    public $tipo_atividade;


public function __construct($id_tipo_atividade,$tipo_atividade)
{
    $this->id_tipo_atividade = $id_tipo_atividade;
    $this->tipo_atividade = $tipo_atividade;
}

    /**
     * @return mixed
     */
    public function getTipoAtividade()
    {
        return $this->tipo_atividade;
    }

    /**
     * @param mixed $tipo_atividade
     */
    public function setTipoAtividade($tipo_atividade)
    {
        $this->tipo_atividade = $tipo_atividade;
    }



}