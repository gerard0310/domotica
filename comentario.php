<?php 
$conexion=mysql_connect("50.62.209.194:3306","ingeiti2","Agundis1zz1")or die("problemas en la conexion");
			mysql_select_db("domotica",$conexion)or die("Problemas en la seleccion de la base de datos");
		  mysql_query("INSERT INTO comentarios(nombre, email, comentario)values('$_POST[nombre_com]', '$_POST[email_com]', '$_POST[comen_com]')");
				  header('Location: contacto.php');
		  
 ?>