<?php 
//incluimos a clase conexion.php a nuestro archivo asi para que pueda reconocer sus variables
include("conexion.php");

//comprobamos si existen los datos de nombre y si no esta vacio esa casilla de nombre
//los datos que recuperamos es gracias al name de su etiqueta $_POST['nombre']
if(isset($_POST['nombre']) && !empty($_POST['nombre']))
	 
	{
		//realizamos la conexion a la base de datos
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$telefono=$_POST['telefono'];
		$direccion=$_POST['direccion'];

		//$consulta2="insert into `ariel`.`persona` ( `apellido`, `nombre`, `telefono`, `direccion`) values ( 'jorge', 'jorge', '66', 'jorgito')";
		$consulta="INSERT INTO persona(nombre, apellido, telefono, direccion) VALUES('$nombre','$apellido','$telefono','$direccion');";
		
		// echo "mi consulta".$consulta2;//nuestra consulta sql

		mysql_query($consulta);
		echo "datos ingresados";
	}
else {echo "problemas al insertar datos";}

?>
<br>
<script type="text/javascript">
	function hola()
	{
		location.href="formulario.php";
	}
</script>
<input type="button" value="Ir al inicio " onclick=location.href='index.php'
	
/>
<input type="button" value="Ir al formulario" onclick="hola()"
	
/>
<br>
<a href="index.php">volve al inicio </a>
<br>
<a href="formulario.php">Volver al fomrmulario </a>