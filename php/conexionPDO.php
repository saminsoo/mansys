<?php 
try {

	$conexion = new PDO('mysql:host=localhost;dbname=mansys','root','');

	$conexion->query('SELECT * FROM usuarios');

} catch (PDOException $e) {

	echo "Error:" . $e->getMessage();

}
 ?>