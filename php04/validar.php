<?php 
session_start();
	$login = $_POST["login"]; 
	$senha = md5($_POST["senha"]);


		include_once 'conecta.php';
$sql = "SELECT * FROM usuarios WHERE `login` = '$login' && `senha` = '$senha'";

$resul = mysqli_query($con,$sql);

if (mysqli_num_rows($resul)) {
	$row = mysqli_fetch_array($resul);
	$_SESSION["email"] = $row[1];
	$_SESSION["perfil"] = $row[3];
	header('location:painel_controle.php');
	
}else{
	$msg = "login ou Senha errada";
	header('location:index.php?msg='.$msg);
}







 ?>