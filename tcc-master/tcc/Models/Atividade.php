<?php

class Atividade
{
    public $id_atividade;
    public $nome_atividade;
    public $data_previsao;
    public $id_turma;
    public $id_disciplina;
    public $tipo_atividade;

    public function __construct($id_atividade,$nome_atividade,$data_previsao,$tipo_atividade)
    {
        $this->id_atividade = $id_atividade;
        $this->nome_atividade = $nome_atividade;
        $this->data_previsao = $data_previsao;
        $this->tipo_atividade = $tipo_atividade;
       // $this->id_turma = $_SESSION['id_turma'];
        // $this->id_disciplina = $id_disciplina;
    }

    public function getTipoAtividade()
    {
        return $this->tipo_atividade;
    }

    public function setTipoAtividade($tipo_atividade)
    {
        $this->tipo_atividade = $tipo_atividade;
    }

    public function getIdAtividade()
    {
        return $this->id_atividade;
    }

    public function setIdAtividade($id_atividade)
    {
        $this->id_atividade = $id_atividade;
    }

    public function getNome_atividade()
    {
        return $this->nome_atividade;
    }

    public function setNome_atividade($nome_atividade)
    {
        $this->nome_atividade = $nome_atividade;
    }

    public function getDataCadastro()
    {
        return $this->data_cadastro;
    }

    public function setDataCadastro($data_cadastro)
    {
        $this->data_cadastro = $data_cadastro;
    }

    public function getDataPrevisao()
    {
        return $this->data_previsao;
    }

    public function setDataPrevisao($data_previsao)
    {
        $this->data_previsao = $data_previsao;
    }

    public function getIdTurma()
    {
        return $this->id_turma;
    }

    public function setIdTurma($id_turma)
    {
        $this->id_turma = $id_turma;
    }

    public function getIdDisciplina()
    {
        return $this->id_disciplina;
    }

    public function setIdDisciplina($id_disciplina)
    {
        $this->id_disciplina = $id_disciplina;
    }

}