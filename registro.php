<?php 
$conexion=mysql_connect("50.62.209.194:3306","ingeiti2","Agundis1zz1")or die("problemas en la conexion");
			mysql_select_db("domotica",$conexion)or die("Problemas en la seleccion de la base de datos");
		mysql_query("INSERT INTO registro (nombre, ap_paterno, ap_materno, sexo, email, telefono)values('$_POST[nombre_registro]', '$_POST[ap_paterno_registro]', '$_POST[ap_materno_registro]', '$_POST[group1]', '$_POST[e_mail_registro]', '$_POST[telefono_registro]')");
		  mysql_query("INSERT INTO usuarios(usuario, contrasena)values('$_POST[usuario_registro]', '$_POST[password_registro]')");
				  header('Location: index.html');
		  
 ?>