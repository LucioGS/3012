<?php 

	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	$ficha = $_GET["num_ficha"];
	include "modelos/api.php";
	$data_convertido = datos_recurso($ficha);
	include "vistas/ficha.htm"; 

?>