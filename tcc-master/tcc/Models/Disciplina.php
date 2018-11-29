<?php

class Disciplina
{
    public $conexao;

    public function GetDisciplinas()
    {
        $this->conexao = BDConection::getConexao();

        $sql = "select * from disciplina";

        $res = $this->conexao->query($sql);

        $disciplina = $res->fetchAll(PDO::FETCH_ASSOC);

        return $disciplina;


    }
}