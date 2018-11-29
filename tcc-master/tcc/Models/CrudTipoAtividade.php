<?php

require_once __DIR__."/BDConection.php";
require_once __DIR__."/TipoAtividade.php";

class CrudTipoAtividade{

    public $conexao;


public function GetTipoAtividade(){

    $this->conexao = BDConection::getConexao();

    $sql = "select * from tipo_atividade";

    $res = $this->conexao->query($sql);

    $tipo_atividades = $res->fetchAll(PDO::FETCH_ASSOC);

    foreach ($tipo_atividades as $tipo_atividade) {
        $tp[] = new TipoAtividade($tipo_atividade['id_tipo_atividade'],$tipo_atividade['tipo_atividade']);
    }
   // print_r($tp);

    return $tp;

}



}