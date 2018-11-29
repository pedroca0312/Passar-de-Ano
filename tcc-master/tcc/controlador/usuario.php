<?php

session_start();

require_once '../Models/CrudUsuario.php';
require_once '../Models/Usuario.php';
require_once '../Models/Turma.php';
require_once '../Models/CrudTurma.php';
require_once "../Models/CrudTipoUsuario.php";




if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'verifica';
}

switch ($acao) {
    case 'verifica':
        $crud2 = new CrudTurma();
        $crud = new CrudUsuario();
        $crud3 = new CrudTipoUsuario();
        if (isset($_POST['gravar'])) {
            $usuarios = $crud->GetUsuarios();
            foreach ($usuarios as $usuario) {
                if ($_POST['usuario'] == $usuario->username and $_POST['senha'] == $usuario->senha) {

                    $_SESSION['username']  = $usuario->username;
                    $_SESSION['id'] = $usuario->id;
                    $_SESSION['id_turma'] = $usuario->turma;
                    $turma = $crud2->GetTurma($_SESSION['id_turma']);
                    $_SESSION['nome_turma'] = $turma->nome;
                    $_SESSION['esta_logado'] = true;
//print_r($_SESSION['nome_turma']);
                    if ($usuario->id_tipo_usuario == 3 or $usuario->id_tipo_usuario == 4){

                        $turmas = $crud2->GetTurmas();
                        include'../views/turmas.php';
                    }else{
                    header('Location: ../fullcalendar-3.9.0/index.php');
                }}
            }
        } else {

            include '../views/login.php';

        }
        break;

    case 'cadastrar':
    
        $crud = new CrudUsuario();

        if (isset($_GET)){
            $crud1 = new CrudTurma();
            $crud3 = new CrudTipoUsuario();

            $turmas=$crud1->GetTurmas();
            $tipo_usuarios=$crud3->getTipoUsuarios();
            include '../views/cadastro.php';
        }
        if (isset($_POST['botao'])){
            $usuario = new Usuario($_POST['nome'],$_POST['email'],$_POST['senha'],Null,$_POST['usuario'],$_POST['turma'],$_POST['tipo_usuarios']);
        $res =  $crud->CadastrarUsuario($usuario);

        header('Location: usuario.php');
        }

        break;
    case 'deletar':

        $crud = new CrudUsuario();

        $crud->deletaUsuario($_GET['id']);

            header('Location: ../fullcalendar-3.9.0/index.php');

        break;

    case 'listar':
        $crud= new CrudUsuario();

        $usuarios= $crud->GetUsuarios();
        include '../views/lista_usuarios.php';

        break;


    case 'ganhar_turma' :
    $crud2 = new CrudTurma();

    $_SESSION['id_turma'] = $_GET['turma'];
        $turma = $crud2->GetTurma($_SESSION['id_turma']);
        $_SESSION['nome_turma'] = $turma->nome;
        header('Location: ../fullcalendar-3.9.0/index.php');

        break;

     case 'Sair':
        session_destroy();
        header('Location: ../controlador/usuario.php');
     break;

    case 'editar':

        $crud = new CrudUsuario();

        if(isset($_POST['edita'])) {
            $usuario = new Usuario($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['id_usuario'],$_POST['username'],$_POST['tipo_turma'],$_POST['tipo_usuarios']);

            $crud->editaUsuarios($usuario);

           header('Location: ../fullcalendar-3.9.0/index.php');
        }else{
            //$atividades = $crud->GetAtividades();


            $usuario = $crud->GetUsuario($_GET['id']);

            include '../views/editarUsuario.php';
        }


}