<?php
//del cliente
$nombre = $_POST['nombres'];
$apellido = $_REQUEST['apellidos'];
$email = $_REQUEST['email'];
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];

include 'conexion.php';


if ( $_REQUEST['signupBtn'] == "registrarse" ){

$sql = "INSERT INTO `pasteur`.`usuarios` (`Nombres`, `Apellidos`, `Email`, `Usuario`, `Pass`)  VALUES ('$nombre','$apellido', '$email', '$user','$pass');";
mysql_query($sql, $link);
header("Location: ../index.php");
echo "usted se ha registrado satifactoriamente";
$my_error = mysql_error($link);
if(!empty($my_error)) {
	echo "Ha habido un error al insertar los valores. $my_error";
}

}






?>
