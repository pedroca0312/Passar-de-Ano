<html>
<head>
    <style type="text/css">@import url(../css/style_turmas.css); </style>

</head>
<body>
<h1>Selecione sua turma (47 turmas)</h1>


    <?php foreach ($turmas as $turma): ?>
<div id="turmas" >
    <h2><a href="http://localhost/the-last-little-agenda-master/tcc-master/tcc/controlador/usuario.php?acao=ganhar_turma&turma=<?= $turma->id_turma ?>"> <?= $turma->nome?></a></h2>
</div>

    <?php endforeach; ?>
</body>
</html>