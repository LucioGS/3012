<?php 
	session_start();
	if(!isset($_SESSION["perfil"])){header('Location: salir.php');}
	include "vistas/filtro.htm"; 
?>


	
	
	


	
	
