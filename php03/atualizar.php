<?php 

$mat = $_POST['mat'];
$nome = $_POST["nome"]; 
$email = $_POST["mail"];
$telefone = $_POST["tel"];

include_once "conect.php";
$sql = "UPDATE aluno SET nome='{$nome}', telefone='{$email}', email='{$telefone}' WHERE mat=".$mat;
$atualizado = mysqli_query($con,$sql);

if ($atualizado) {
	echo "Sucesso";
	header('consulta.php');
}else{
	echo "error";
}
 ?>
