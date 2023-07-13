<?php 
include ('conexion.php');

$isbn = $_POST['isbn'];
$titulo = $_POST['título'];
$genero = $_POST['género'];
$autor = $_POST['cod_autor'];

$up = $conexion -> query("UPDATE libros SET titulo='$titulo', genero='$genero', autor='$autor' WHERE isbn='$isbn' ");
if ($up) {
	echo "<script>
	location.href='formulario.php';
	</script>";
}else{
	echo "<script>
	location.href='actualizar.php?id=".$isbn."';
	</script>";
}
 ?>