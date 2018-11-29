<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/11/18
 * Time: 16:55
 */

class TipoUsuario
{
    public $id_tipo_usuario;
    public $desc_usuario;
public function __construct($id_tipo_usuario,$desc_usuario)
{
    $this->id_tipo_usuario=$id_tipo_usuario;
    $this->desc_usuario=$desc_usuario;

}

    /**
     * @return mixed
     */
    public function getIdTipoUsuario()
    {
        return $this->id_tipo_usuario;
    }

    /**
     * @param mixed $id_tipo_usuario
     */
    public function setIdTipoUsuario($id_tipo_usuario)
    {
        $this->id_tipo_usuario = $id_tipo_usuario;
    }

    /**
     * @return mixed
     */
    public function getDescUsuario()
    {
        return $this->desc_usuario;
    }

    /**
     * @param mixed $desc_usuario
     */
    public function setDescUsuario($desc_usuario)
    {
        $this->desc_usuario = $desc_usuario;
    }

}
