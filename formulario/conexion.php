<?php 

// Parametros a configurar para la conexion de la base de datos 

$hotsdb = "localhost";    // sera el valor de nuestra BD 
$basededatos = "ariel";    // sera el valor de nuestra BD 

$usuariodb = "root";    // sera el valor de nuestra BD 
$clavedb = "mysql";    // sera el valor de nuestra BD 

$tabla_db1 = "persona";    // sera el valor de una tabla 

// Fin de los parametros a configurar para la conexion de la base de datos 

$conexion_db = mysql_connect("$hotsdb","$usuariodb","$clavedb") 
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE"); 
    $db = mysql_select_db("$basededatos", $conexion_db) 
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE"); 
?> 
