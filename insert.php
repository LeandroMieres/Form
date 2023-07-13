<?php
include ('conexion.php');

$titulo = $_POST['título'];
$genero = $_POST['género'];
$autor = $_POST['cod_autor'];

#$ins= $conexion->query("INSERT INTO alumnos (id,nombre,paterno,materno) VALUES ('','Leandro','Mieres','Febre')");

$ins= $conexion->query("INSERT INTO libros (isbn,título,género,cod_autor) VALUES ('','$titulo','$genero','$autor')");

if ($ins) {
    echo "Guardado";
}else{
    echo "No Guardado";
}

?>