
<!DOCTYPE html>
<html>
<head>
	<title>consulta</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<?php include_once "nav.php"; ?>

<form style="width: 70%; margin: auto; margin-top: 100px; ">
	<h3 style=" text-align: center; " >Consulta</h3> <br>
<div class="input-group mb-3" >	
  		<input type="text" class="form-control" name="busca" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  	<div class="input-group-append">
    	<input class="btn btn-outline-secondary" type="submit" id="button-addon2" value="Button">
  	</div>
</div>
</form>
<?php 
if (isset($_GET["busca"])) {
		$nome = $_GET["busca"];
		include_once "conect.php";
		$sql = "SELECT * FROM `aluno` WHERE `nome` like  '$nome%'";
		$result = mysqli_query($con,$sql);
		$registros = mysqli_num_rows($result);

		

	if ($registros > 0) {
?>
	<table class="table table-striped">
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Telefone</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
<?php 
		$Total = 0;
		while ($row = mysqli_fetch_array($result))
		{ ?>
			<tr>
			<td ><?php echo $row['nome']; ?></td>
			<td ><?php echo $row['email']; ?></td>
			<td ><?php echo $row['telefone']; ?></td>
            <td><a href="editar.php?mat=<?php echo $row['mat'];?>"><i class="fas fa-user-edit"></i></a></td>
            <td><i class="fab fa-xbox"></i></td>
						
			</tr>
							
		
 <?php }//while
 
echo "</table>";
	}else{
	echo "Sem registros";
	}//if registros
}
// matricula
						 ?>
</body>
</html>