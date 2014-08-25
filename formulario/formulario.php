<html>


<title>formulario</title>
<body>
	<h2>bienvenidos al formulario</h2>
	<!-- en el method podemos usar dos formas una es post y la otra es get -->
	<!-- enviamos los datos al archivo insertar.php -->
<form action="insertar.php" method="post" name="form">

	<p>nombre:</p> <input type="text" name="nombre" /> <br /></br/>
	
	<p>apellido:</p> <input type="text" name="apellido" /> <br /><br />
	<p>telefono:</p> <input type="text" name="telefono" /> <br /><br />
	<p>direccion:</p> <input type="text" name="direccion" /> <br /><br />
	

	
	<input type="submit" value="insertar datos" />
</form>

</body>


</html>