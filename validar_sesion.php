<?php
require_once "librerias/configuracion.php";

require_once "librerias/conexion.php";
require_once "librerias/acceso.php";

$conexion=new conexion('S'); //para decirle que solo haga la conexion con el rol select para que solo se puedan hacer select

$acceso=new acceso($conexion);

/*if(!in_array($_SERVER["HTTP_REFERER"],$_SESSION["SEGURIDAD_SERVIDOR"]))
{
     header('location: index.php');
	 $_SESSION['ERROR']="ERROR: Ruta No Encontrada";
	 exit;   
}*/

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$arreglo_acceso=$acceso->verificarLogin($usuario,$clave);

if(count($arreglo_acceso))
{
    $_SESSION['AUTENTICADO']="OK";
    header('location: principal/menu.php'); exit;
}
else
{
     header('location: index.php');
	 $_SESSION['USUARIO']=$usuario;
	 $_SESSION['ERROR']="ERROR: Datos Incorrectos";
	 exit;
}
?>