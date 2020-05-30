<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$estadocivil = $_POST["estadocivil"];
$sexo = $_POST["sexo"];

include_once "conexao.php";
$comando = "INSERT INTO `clientes`(`nome`, `email`, `estadocivil`, `sexo`) VALUES ('$nome','$email','$estadocivil','$sexo')";

mysqli_query($con,$comando);
echo "<br>".$nome;
echo "<br>".$email;
echo "<br>".$estadocivil;
echo "<br>".$sexo;
echo "<br>";

header:"index.php";
?>
<!DOCTYPE html>
<html>

<body style="background-color: green;">
<img src="ricardo.gif" style="margin-left: 30%;">
</body>
</html>