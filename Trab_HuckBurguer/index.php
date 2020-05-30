<!DOCTYPE html>
<html>
<head>
	<title>Huck Burguer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<h1>Huck Burguer</h1>
		<form action="gravar.php" method="post">
			<h3>Dados do Cliente</h3>
			<br>
			<b>Nome:</b>
			<input type="text" name="nome" class="form-control" required>
			<br>
			<b>Telefone:</b>
			<input type="tel" name="telefone" class="form-control" required>
			<br>
			<br>
			<b>Monte seu lanche</b>
			<br>
			<b>Ponto da carne</b>
			<br>
			<input type="radio" name="ponto_carne" value="Mal Passada"> Mal Passada
			<input type="radio" name="ponto_carne" value="Ao Ponto" checked> Ao Ponto
			<br>
			<b>Pão:</b>
			<select class="form-control" name="pao">
				<option>Brioche</option>
				<option>Australiano</option>
				<option>Integral</option>
				<option>Alho e Orégano</option>
				<option>Italiano com Ervas</option>				
			</select>
			<br>
			<b>Queijo:</b>
			<select class="form-control" name="queijo">

				<option>Cheddar</option>
				<option>Prato</option>
				<option>Suiço</option>
				<option>Muçarela</option>
				<option>Sem Queijo</option>
			</select>
			<br>
			<b>Observações:</b>
			<textarea class="form-control" aria-label="With textarea" name ="observacoes" style="height: 200px;"></textarea>
			<br>
			<input type="submit" class="btn btn-success" value="Cadastra">

		</form>
	</div>


</body>
</html>