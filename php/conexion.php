<?php
$servidor="localhost";
$nombreBD="id21182952_carrito";
$usuario="id21182952_josedgar";
$pass="Dsi2408_";

$conexion=new mysqli($servidor,$usuario,$pass,$nombreBD);
if($conexion -> connect_error){
    die("No se puede conectar a la base de datos");
}