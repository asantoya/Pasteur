<?php
$doctor = $_GET["doctor"];
$hospital = $_GET["date"];
$hora = $_GET["time"];
session_start();

include"conexion.php";

if ( $_REQUEST['citarBtn'] == "citar" ){
    $login = mysql_query("SELECT `id` FROM `usuarios` WHERE `Usuario`=1", $link);
    $sql = "INSERT INTO `pasteur`.`citamedica` (`id`, `Hospital`, `cita`, `medico`, `usuario`) VALUES (NULL, $hospital, 1, $doctor, $login);";
    mysql_query($sql, $link);
//    header("Location: ../Pages/dashboard.php");
    $my_error = mysql_error($link);
    if(!empty($my_error)) {
            echo "Ha habido un error al insertar los valores. $my_error";
    }  else {
        echo "cita creada";
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
