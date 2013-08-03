<?php
session_start();
require_once("conexion.php");
session_unset();
session_destroy();
header("location: ../index.php"); // regresar al index o a la pagina donde se hará el ingreso de sesión
?>
