<?php  
include_once "conect.php";

$nome = $_POST["nome"]; 
$email = $_POST["mail"];
$telefone = $_POST["tel"];

$sql = "INSERT INTO `aluno`( `nome`, `email`, `telefone`) VALUES ('$nome','$email','$telefone')";
$envio = mysqli_query($con,$sql);

if ($envio) {
    
	echo "enviado com sucesso";
    sleep(2);
	header("Location:index.php");
	
}else{
	echo "erro";
	header("Location:index.php");
}

?>