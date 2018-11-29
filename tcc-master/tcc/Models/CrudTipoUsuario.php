<?php

require_once "TipoUsuario.php";
require_once "BDConection.php";

class CrudTipoUsuario
{

    public $conexao;

    public function getTipoUsuarios(){
        $this->conexao = BDConection::getConexao();

        $sql = "select * from tipo_usuario";

        $res = $this->conexao->query($sql);

        $usu = [];

        $TipoUsuarios = $res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($TipoUsuarios as $tipoUsuario){
            $usu[] = new TipoUsuario($tipoUsuario['id_tipo_usuario'],$tipoUsuario['desc_usuario']);
        }
        return $usu;

    }

}