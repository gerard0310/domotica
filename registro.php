<?php 
	$nombre_registro=$_POST["nombre_registro"];
	$ap_paterno_registro=$_POST["ap_paterno_registro"];
	$ap_materno_registro=$_POST["ap_materno_registro"];
	$e_mail_registro=$_POST["e_mail_registro"];
	$telefono_registro=$_POST["telefono_registro"];
	$usuario_registro=$_POST["usuario_registro"];
	$password_registro=$_POST["password_registro"];
	if ($_POST["group1"]=="masculino") {
		$sexo_registro="masculino";
	}
	else{
		$sexo_registro="femenino";
	}




 ?>