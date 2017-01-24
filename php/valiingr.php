<?php 

//print_r($_POST);
if (!$_POST) {

	header('Location: ../ingreso.html');

}

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	echo 'Hola esta es tu usuario: ' . $usuario . ' y esta es tu contrasena: ' . $contrasena;
 
?>
