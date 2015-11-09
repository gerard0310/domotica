<?php
$conexion=mysql_connect("50.62.209.194:3306","ingeiti2","Agundis1zz1")or die("problemas en la conexion");
			mysql_select_db("domotica",$conexion)or die("Problemas en la seleccion de la base de datos");
			$query=mysql_query("SELECT * FROM usuarios where usuario='$_POST[usuario_sesion]'");
				if($row = mysql_fetch_array($query))
				{     
//Si el usuario es correcto ahora validamos su contraseña
 					if($row["contrasena"] == $_POST['pass_sesion'])
 						{
 							setcookie("user", "$row[usuario]", time()+3600);
 							header('Location: usuario.php');
 						}
 						else{
 							header('Location: index.html'); 
 						}
				}
				else{
					 header('Location: index.html'); 
					}
	?>