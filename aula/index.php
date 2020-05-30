<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"    >
    <title>Meu Site Php</title>
</head>
<body>
   
    <div class="container">
        
        <div id="cadastro" >
        <form action="gravar.php" method="post" id="painel" style="width: 500px;">
            <h3>Cadastro de Clientes</h3>
            <div class ="form-group"> 
                <span>Nome:<br></span>
                <input type="text" name="nome" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <span>E-mail:</span><br>
                <input type="email" name="email" class="form-control">
            </div>
            <br>
            <div class = "form-group" >
            <span>Estado Cívil:</span>
            <select class="form-control" name = "estadocivil">
                <option disabled selected>Selecione</option>
                <option value="Solteiro">Solteiro(a)</option>
                <option value="Casado">Casado(a)</option>
                <option value="Divorciado">Divorciado(a)</option>
                <option value="Viuvo">Viuvo(a)</option>
            </select>
            </div>
            <br>
            <div class="form-group">
            Sexo: <br>
            <input type="radio" name="sexo" checked value="M"> Masculino
            <input type="radio" name="sexo" value ="F"> Feminino
            </div>
            <br>
            <input type="submit" value="salvar">
            <br>
        <a href="tela.php">busca usuario</a>
        </form>
        </div>
    </div>
</body>
</html>