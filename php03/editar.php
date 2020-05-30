<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
	<?php include_once "nav.php"; 
    $mat = $_GET['mat'];
    include_once "conect.php";
		$sql = "SELECT `nome`, `email`, `telefone` FROM `aluno` WHERE `mat` = '$mat' ";
		$result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        
    
    ?>
	<form id="formulario" action="atualizar.php" method="post" style="width: 70%; margin: auto; margin-top: 100px; ">
	<H3>Editar Cadastro : </H3><br>
	<input class="form-control" type="hidden" name="mat" value="<?php echo $mat; ?>">
        <label>alunos:</label>
	<input class="form-control" type="text" name="nome" value="<?php echo $row[0]; ?>"> <br>
        <label>E-mail:</label>
	<input class="form-control" type="mail" name="mail" value="<?php echo $row[1]; ?>"> <br>
        <label>Telefone:</label>
	<input class="form-control" type="int" name="tel" value="<?php echo $row[2]; ?>"> <br>

	<input class="btn btn-info" value="Atualizar" type="submit" name="">
	</form>
	
	
	

</body>
</html>