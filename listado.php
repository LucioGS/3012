<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	$titulo = $_POST["titulo"];
	$year = $_POST["year"];
	$tipo = $_POST["tipo"];
	include "modelos/api.php";
	$un_array = listado_recursos($titulo, $year, $tipo);
	include "vistas/listado.htm"; 

?>


	
	
