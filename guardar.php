<?php 
include ('conexion.php');

$isbn = $_POST['isbn'];
$titulo = $_POST['título'];
$genero = $_POST['género'];
$autor = $_POST['cod_autor'];

$ins = $conexion -> query("INSERT INTO libros (isbn,título,género,cod_autor) VALUES ('','$titulo','$genero','$autor')");
if ($ins) {
	echo "guardo";
}else{
	echo "no guardo";
}

 ?>