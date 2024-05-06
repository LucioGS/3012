<?php

	function perfil_un_usuario($id){	
	
		$mbd = new PDO('mysql:host=localhost;dbname=cine', 'root', '');
		$sql = "SELECT * FROM perfiles WHERE id='" . $id ."'";
		$perfiles = $mbd->query($sql);
		$perfil = $perfiles->fetch();
		return $perfil["nombre"];
		
    }


?>