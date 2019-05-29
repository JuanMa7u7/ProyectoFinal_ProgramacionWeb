<?php
	include_once("../database/database.php");
				
				
	$conexion = new Database();
	$query = "SELECT * FROM materia WHERE registrado = 'y'";
	
	
	$id = $_REQUEST['idMateria'];
	
	
	
	$query = "UPDATE materia SET
	registrado = 'y' WHERE idMateria = '$id' ";
	
	$resultado = $conexion->connect()->query($query);
	
	//$ejecutar = mysql_query($sql);
	if(!$resultado){
		

	echo("Hubo Algun Error");
	}else{
		header('location: PreHorarioEditar.php');
	}
	
?>