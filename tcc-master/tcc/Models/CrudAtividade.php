<?php
session_start();
require_once __DIR__."/BDConection.php";
require_once __DIR__."/Atividade.php";
require_once __DIR__."/TipoAtividade.php";

class CrudAtividade
{
    public $conexao;
    public $id_turma;

    function __construct()
    {
        $this->id_turma = $_SESSION['id_turma'];

    }

    public function GetAtividades(){


        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade WHERE id_turma = $this->id_turma";

        $res = $this->conexao->query($sql);

        $at = [];

        $atividades= $res->fetchAll(PDO::FETCH_ASSOC);


        foreach ($atividades as $atividade) {
            $at[] = new Atividade($atividade['id_atividade'],$atividade['nome_atividade'], $atividade['data_previsao'],$atividade['id_tipo_atividade']);
        }
        return $at;

    }

    public function GetAtividade($id){

        $this->conexao = BDConection::getConexao();

        $sql = "select * from atividade where id_atividade=".$id;

        $res = $this->conexao->query($sql);

        $atividade= $res->fetch(PDO::FETCH_ASSOC);


        $at = new Atividade($atividade['id_atividade'],$atividade['nome_atividade'], $atividade['data_previsao'],$atividade['id_tipo_atividade']);
        return $at;

    }

    public function cadastroAgenda(Atividade $atividade){
        $this->conexao = BDConection::getConexao();

        $sql = "insert into atividade (nome_atividade,data_previsao, id_turma,id_tipo_atividade) values ('".$atividade->getNome_atividade()."','".$atividade->getDataPrevisao()."',".$this->id_turma.",'".$atividade->getTipoAtividade()."')";

        $res = $this->conexao->query($sql);

        return $res;
    }

    public function deletaAtividade($id){

        $this->conexao = BDConection::getConexao();

        $sql = "delete from atividade where id_atividade=".$id;

        $res = $this->conexao->query($sql);

        return $res;
    }

    public function editaAtividade(Atividade $atividade){

        $this->conexao = BDConection::getConexao();

        $at[] = $atividade->getIdAtividade();
        $at[] = $atividade->getNome_atividade();
        $at[] = $atividade->getDataPrevisao();


        $sql = "update atividade set nome_atividade='".$at[1]."',data_previsao='".$at[2]."' where id_atividade='".$at[0]."'";

        $res = $this->conexao->query($sql);
    }

}