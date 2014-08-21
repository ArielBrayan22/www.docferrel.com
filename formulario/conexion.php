<?php
/**
* 
*/
class conexion
{
	
public $host ="localhost";
public $user ="root";
public $password="mysql";
public $database_Name="ariel";
public $conexion_DB = mysql_connect($this->host,$this->user,$this->password)or die("problemas al conectar");
public $db=mysql_select_db("$this->database_Name",$this->conexion_DB)or die("problemas al conectar la bd".$this->database_Name);
	
	
}



?>