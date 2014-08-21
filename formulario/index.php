<?php 
echo "hola mundo";
//incuyo a la clase de la base de datos(conexion.php)
include_once('conexion.php');
//creamos un nuevo objeto llamado data que es de tipo conexion
$dato=new conexion();
//recupero un dato de la conexion que es host, para ver qu ela clase funciona 
echo "mi dato".$dato->host;
echo "algo paso".$dato->db;


 ?>