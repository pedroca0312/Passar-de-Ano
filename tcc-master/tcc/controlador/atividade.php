<?php

    require_once __DIR__."/../Models/CrudAtividade.php";
    require_once __DIR__."/../Models/Disciplina.php";
    require_once __DIR__."/../Models/CrudTipoAtividade.php";
    /*  if(isset($_GET['acao'])){
      
    }else{
        $acao='cadastrar';
    }
*/
    $acao=$_GET['acao'];

    switch ($acao) {

        case 'cadastrar':

            $crud = new CrudAtividade();

            $crud1 = new Disciplina();


            if (isset($_POST['botao'])) {
            $atividade = new Atividade(null,$_POST['nome_atividade'], $_POST['data_previsao'],$_POST['tipo_atividade']);
            $crud->cadastroAgenda($atividade);
            //print_r($crud);

            header('Location: ../fullcalendar-3.9.0/index.php');

        }else{
            $crud2 = new CrudTipoAtividade();

                $disciplinas = $crud1->GetDisciplinas();
                $tipo_atividades = $crud2->GetTipoAtividade();
                include '../views/cadastro_atividade.php';
            }
        break;

        case 'deletar':

        $crud = new CrudAtividade();

            $crud->deletaAtividade($_GET['id']);

            header('Location: ../fullcalendar-3.9.0/index.php');

        break;

        case 'listar':
            $crud= new CrudAtividade();

            $atividades= $crud->GetAtividades();
            include '../views/lista_atividades.php';

            break;

        case 'editar':

            $crud = new CrudAtividade();

            if(isset($_POST['edita'])) {
                $atividade = new Atividade($_POST['id_atividade'], $_POST['nome_atividade'], $_POST['data_previsao'],$_POST['tipo_atividade']);

                $crud->editaAtividade($atividade);

                header('Location: ../fullcalendar-3.9.0/index.php');
            }else{
                //$atividades = $crud->GetAtividades();


                $atividade = $crud->GetAtividade($_GET['id']);

                include '../views/editar.php';
            }

    }




