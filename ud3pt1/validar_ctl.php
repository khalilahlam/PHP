<?php
$dni = $_GET['dni'];


$nombre = $_GET['nombre'];

$apellidos = $_GET['apellidos'];

$dni_validos = array('10000000A', '20000000B', '30000000C');

if (in_array($dni, $dni_validos)) { 
header("Location: menu.php?nombre=" . urlencode($nombre) . "&apellidos=" . urlencode($apellidos));

}
else{
      echo "DNI no válido <a href='index.html'>Volver</a>";
}