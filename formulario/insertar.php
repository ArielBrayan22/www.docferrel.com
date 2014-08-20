<?php 

include("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) 
	&& isset($_POST['pw']) && !empty($_POST['pw']))
	{
		$con=mysql_connect($host,$user,$pw)or die("problemas al conectar");

       mysql_select_db($db,$con)or die("problemas al conectar la bd");

mysql_query("INSERT INTO table (NOMBRE,PW) VALUES('$_POST[nombre]','$_POST[pw]'",$con);
echo "datos ingresados";
	}
else {echo "problemas al insertar datos";}
?>