<?php 

$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo "Bienvenido, $nombre $apellidos";

// Enlaces
echo '<br><a href="formdistritos.php?nombre=' . urlencode($nombre) . '&apellidos=' . urlencode($apellidos) . '">Datos por distritos</a>';
echo '<br><a href="formbarrios.php?nombre=' . urlencode($nombre) . '&apellidos=' . urlencode($apellidos) . '">Datos por barrios (distrito de Patraix)</a>';
echo '<br><a href="index.html?">Inicio</a>';

?>
