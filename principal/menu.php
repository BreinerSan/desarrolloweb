<?php
require_once "../librerias/configuracion.php";

//Llave de seguridad
if($_SESSION['AUTENTICADO']!="OK"){header("location: ../index.php"); exit;}
?>
INFORMACI�N IMPORTANTE