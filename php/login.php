<?php
session_start();
$user = $_POST["user"];
$pass = $_POST["pass"];

$_SESSION['user'] = $_POST["user"];
$_SESSION['pass'] = $_POST["pass"];
include"conexion.php";

if ( $_REQUEST['loginBtn'] == "login" ){
	if($user != null or $pass != null){

		$sql = "SELECT id, Usuario, Pass from usuarios WHERE Usuario='$user' and Pass='$pass' ";
		$result = mysql_query($sql, $link);
		if (mysql_num_rows($result) == 0) {
			echo "usuario y/o contraseña incorrecta, nada para mostrar <br>";
			echo"<a href='../index.php'>volver</a> <br>";
			echo"o<br>";
			echo"<a href='../registro.php'>registrarse</a> <br>";
			
			exit();
		}

		if($row = mysql_fetch_assoc($result)) {
			if($row["Usuario"] == $user and $row["Pass"] == $pass) {
				if($recor == "ON"){

				}
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                $_SESSION['user_id'] = $row["id"];
				mysql_free_result($result);
         				header("Location: ../pages/dashboard.php");
			}else{
				header("Location: index.php");/*Usuario No Registrado*/
			}
		}
	}else{
		header("Location: index.php");
	}
	if (!$result) {
		//header("Location: no-consulta.php?sql=$sql");
			exit();
		}
		

}
?>
