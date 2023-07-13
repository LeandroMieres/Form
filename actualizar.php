<?php 
include 'conexion.php';

$isbn=$_GET['id'];

$sel = $conexion -> query("SELECT * FROM libros WHERE isbn='$isbn' ");
if ($fila = $sel -> fetch_assoc()) {
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="update.php" method="post">
	<input type="hidden" name="isbn" value="<?php echo $isbn ?>">
	<input type="text" name="título" placeholder="titulo" value="<?php echo $fila['título'] ?>"><br>
	<input type="text" name="género" placeholder="genero" value="<?php echo $fila['género'] ?>"><br>
	<input type="text" name="cod_autor" placeholder="codigo autor" value="<?php echo $fila['cod_autor'] ?>"><br>
	<input type="submit" value="Actualizar">
</form>
</body>
</html>