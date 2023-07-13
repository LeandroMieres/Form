<?php 
include 'conexion.php';

$isbn=$_GET['id'];

$del = $conexion -> query("DELETE FROM libros WHERE isbn = '$isbn' ");
if ($del) {
	echo "BORRADO";
}else{
	echo "NO BORRADO";
}
?>