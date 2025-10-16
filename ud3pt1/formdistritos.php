<?php
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo "Bienvenido, $nombre $apellidos<br><br>";

echo '<h2>CONSULTA DATOS POR DISTRITOS</h2>';

echo '<form action="datosdistritos.php" method="get">';
echo '<label for="distrito">Distrito:</label>';
echo '<select name="distrito" id="distrito">';

include 'datosdistritos.php'; 
foreach ($datos_distritos as $distrito => $poblacion) {
    echo "<option value=\"$distrito\">$distrito</option>";
}

echo '</select>'; 
echo '<br><br><input type="checkbox" name="mostrar_todos" value="1"> Mostrar todos los distritos';

echo '<br><br><input type="submit" value="Consultar">';
echo '</form>';
?>
