<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php include_once "nav.php"; ?>
	<form id="formulario" method="post" action="gravar.php" style="width: 70%; margin: auto; margin-top: 100px; ">
	<H3>Castro de aluno </H3><br>
	alunos:
	<input class="form-control" type="text" name="nome"> <br>
	E-mail:
	<input class="form-control" type="mail" name="mail"> <br>
	Telefone:
	<input class="form-control" type="int" name="tel"> <br>

	<input class="btn btn-info" type="submit" name="">
	</form>

</body>
</html>