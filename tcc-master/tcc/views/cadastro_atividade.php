<?php
require_once __DIR__."/../Models/CrudTipoAtividade.php";
require_once __DIR__."/../Models/BDConection.php";
require_once __DIR__."/../Models/TipoAtividade.php";
?>

<html xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_cadastro_atividade.css); </style>

</head>
<body>

<form action="" method="post">

    <div class="tudo">
    <h1>Cadastro de atividade</h1> <br><br>

        <h2>Nome da Atividade: </h2>
  <div id="nome_atividade">

      <input type="text" class="form-control inputLogin" name="nome_atividade"> <br><br>

  </div>

        <div id="tipo_atividade">

     <h2>Tipo da Atividade: </h2>

            <select  class="btn btn-secondary dropdown-toggle" name="tipo_atividade" id="tipo_atividade"><?php foreach ($tipo_atividades as $tipo_atividade): ?>

                    <option value="<?= $tipo_atividade->id_tipo_atividade?>"><?= $tipo_atividade->tipo_atividade ?></option>

                <?php endforeach;?>

            </select> <br> <br> <br>

        </div>

        <h2>Disciplina: </h2>
        <div id="disciplina">

            <select  class="btn btn-secondary dropdown-toggle" name="disciplina" id="disciplina"><?php foreach ($disciplinas as $disciplina): ?>

                    <option value="<?= $disciplina['id_disciplina']?>"><?= $disciplina['nome']?></option>

                <?php endforeach;?>

            </select> <br> <br> <br>

        </div>

        <h2>Data: </h2>
  <div id="data_previsao">

      <input type="date" class="form-control inputLogin" name="data_previsao" placeholder="Data" ><br><br>

  </div>



  <div id="botao">

        <button name="botao" type="submit" class="btn btn-primary btn-lg">Cadastrar atividade</button> <br> <br>

  </div>
  </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      </form>
</body>
</html>