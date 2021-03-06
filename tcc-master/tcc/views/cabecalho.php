<?php
session_start();
require_once '../Models/CrudUsuario.php';

$crud = new CrudUsuario();
$usuario = $crud->GetUsuario($_SESSION['id']);

?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">@import url(../css/style_cabecalho.css); </style>

</head>
<body>
<div class="tudo">
<br>
<img src="../../imagens/imagens/logo-1.png"> <br> <br>
<br>
<h1>Turma:<?= $_SESSION['nome_turma'];?> <br><br>Nome:<?=$_SESSION['username'];?> <br><br></h1>

<div id=CadastrarAtividade>
    <?php if ($usuario->id_tipo_usuario == 3 or $usuario->id_tipo_usuario == 2 or $usuario->id_tipo_usuario == 4){
            echo '<a href="../controlador/atividade.php?acao=cadastrar"><button name="Cadastrar" type="submit" class="btn btn-secondary btn-lg">Cadastrar Atividade</button></a>
    <br> <br>
';}?>

    <div id=CadastrarAtividade>
    <?php if ($usuario->id_tipo_usuario == 3 or $usuario->id_tipo_usuario == 2 or $usuario->id_tipo_usuario == 4){
        echo'<a href="../controlador/atividade.php?acao=listar"><button name="Lista" type="submit" class="btn btn-secondary btn-lg">Lista de Atividades</button></a>
        <br> <br>';}?>
    </div>

    <div id=CadastrarAtividade>
    <?php if ($usuario->id_tipo_usuario == 4){
        echo'<a href="../controlador/usuario.php?acao=listar"><button name="ListaUsuario" type="submit" class="btn btn-secondary btn-lg">Lista de Usuario</button></a>
        <br> <br>
        ';}?>
    </div>
    <div id=CadastrarAtividade>
    '<a href="../controlador/usuario.php?acao=Sair"><button name="Sair" type="submit" class="btn btn-secondary btn-lg">Sair</button></a>
        <br> <br>
</div>

</div>
</body>