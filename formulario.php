<?php 
include 'conexion.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="guardar.php" method="post">
	<h3>Ingresar libros</h3>
	<input type="hidden" name="isbn"">
	Ingrese titulo      : <input type="text" name="título" placeholder="titulo""><br>
	Ingrese genero      : <input type="text" name="género" placeholder="genero"><br>
	Ingrese Codigo autor: <input type="text" name="cod_autor" placeholder="codigo autor"><br>
	<input type="submit" value="Actualizar">
	<table>
		<th>isbn</th>
		<th>título</th>
		<th>género</th>
		<th>cod_autor</th>
		<th></th>
		<th></th>
		<?php 
		$sel = $conexion ->query("SELECT * FROM libros ");
		while ($fila = $sel -> fetch_assoc()) {
		 ?>
		 <tr>
		 	<td><?php echo $fila['isbn'] ?></td>
		 	<td><?php echo $fila['título'] ?></td>
		 	<td><?php echo $fila['género'] ?></td>
		 	<td><?php echo $fila['cod_autor'] ?></td>
		 	<td><a href="actualizar.php?id=<?php echo $fila['isbn'] ?>">EDITAR</a></td>
		 	<td><a href="borrar.php?id=<?php echo $fila['isbn'] ?>">ELIMINAR</a></td>
		 </tr>
		 <?php } ?>
	</table>
	</form>
</body>
</html>