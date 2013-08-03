<?php

$servidor="localhost:3306";
$bd="pasteur";
$usu="root";
$passdb="";

if (!($link=mysql_connect($servidor,$usu,$passdb))){
	echo "no se pudo conectar a la base de datos";
        	exit();
}

if (!mysql_select_db($bd,$link)){
	echo "Error seleccionando la base de datos.";
	exit();
}




 
?>