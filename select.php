<?php
include ('conexion.php');

$sel=$conexion->query("SELECT * FROM libros");
while ($fila = $sel ->fetch_assoc()){
    echo$fila['isbn'];
    echo$fila['título'];
    echo$fila['género'];
    echo$fila['cod_autor'];
    echo "<br>";
}

?>