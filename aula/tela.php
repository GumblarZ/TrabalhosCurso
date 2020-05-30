<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Consultar Cliente</h1>
		<form id="Busca">

			<div class="input-group mb-3">
  				<input type="text" class="form-control" name="nome" placeholder="Digite a Busca" aria-label="Recipient's username" aria-describedby="button-addon2">
  			<div class="input-group-append">
    			<button class="btn btn-outline-secondary" type="submit" id="button-addon2" style = "background-color:green; color: white;">Buscar</button>
  			</div>
			</div>			
		</form>
		<?php 
		if (isset( $_GET["nome"])) {
			$nome = $_GET["nome"]; ?>
			<div id="resultado">
				<?php
		echo " <span>  Buscado por : ".$nome."</span>";
		include_once "conexao.php";
		$sql = "SELECT * FROM `clientes` WHERE `nome` LIKE '$nome%' ORDER BY `nome`";
		$result = mysqli_query($con,$sql);

		$registros = mysqli_num_rows($result);

		if($registros > 0 ){?>
				
			<table border="1px" class="table" id="table">
				<thead class="thead-dark">
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Estado Civil</th>
					<th>Sexo</th>
				</tr>
				</thead>	
					<?php 
						$Total = 0;
						while ($row = mysqli_fetch_array($result)) { ?>
						<tr>
						<td id="tabela_impar"><?php echo $row['nome']; ?></td>
						<td id="tabela_par"><?php echo $row['email']; ?></td>
						<td id="tabela_impar"><?php echo $row['estadocivil']; ?></td>
						<td id="tabela_par"><?php echo $row['sexo']; ?></td>
						</tr>
						<?php
						$Total++; } ?>	 
					
			</table>
		<?php }else{?>
			<br>
			<span>N achei nd man </span>
			<br>
			<img src="cry.gif" style=" width: 98%; margin-left: 10px;">
			<br>
			
			<?php
			}
		}
	echo "<span> Total de registros: ". $Total;
	echo "<br>";	
	?>

		</div>
	</div>
</body>
</html>