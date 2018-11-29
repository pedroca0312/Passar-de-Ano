<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_cadastro.css); </style>
</head>
<body>
<form action="?acao=cadastrar" method="post">

    

    <div class="tudo">
    <h1>Cadastre-se</h1>

        <h2>Nome Completo: </h2>
	<div id="nome">
		
		<input class="form-control inputLogin" type="text" name="nome" > <br> <br>

	</div>

        <h2>Usuario: </h2>
	<div id="usuario">
		
		<input class="form-control inputLogin" type="text" name="usuario"> <br> <br>
	
	</div>

        <h2>Email: </h2>
	<div id="email">
		
		<input class="form-control inputLogin" type="email" name="email"> <br> <br>
	
	</div>

        <h2>Senha: </h2>
	<div id="senha">
		
		<input class="form-control inputLogin" type="password" name="senha" > <br> <br>
	
	</div>

        <h2>Confirmar Senha</h2>
	<div id="confirma_senha">
		
		<input class="form-control inputLogin" type="password" name="confirma_senha" > <br> <br>
	
	</div>

        <div id="tipo_usuarios">


            <h2>Tipo de Usuário: </h2>

            
            <select  class="btn btn-secondary dropdown-toggle" name="tipo_usuarios" id="tipo_usuarios"><?php foreach ($tipo_usuarios as $tipo_usuario): ?>

                    <option value="<?= $tipo_usuario->id_tipo_usuario ?>"><?= $tipo_usuario->desc_usuario?></option>

                <?php endforeach;?>

            </select> <br> <br> <br>

        </div>

        <h2>Turma: </h2>
        <div id="turma">

            <select  class="btn btn-secondary dropdown-toggle" name="turma" id="turma"><?php foreach ($turmas as $turma): ?>

                <option value="<?= $turma->getIdTurma()?>"><?= $turma->GetNome()?></option>
            
            <?php endforeach;?>
            
            </select> <br> <br> <br>

        </div>

	<div id="botao">
		
		<button name="botao" type="submit" class="btn btn-primary btn-lg" >Cadastrar</button> <br> <br>

	</div>
    </div>

</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>
</html>