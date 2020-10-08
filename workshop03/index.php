<?php  
	include 'connection.php';
	$sentence = $bd->query("SELECT * FROM categories;");
	$categories = $sentence->fetchAll(PDO::FETCH_OBJ);
	//print_r($alumnos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>List of categories</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>List of categories</h3>
		<table>
			<tr>
				<td>id</td>
				<td>Category</td>
				<td>Description</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
				foreach ($categories as $data) {
					?>
					<tr>
						<td><?php echo $data->id; ?></td>
						<td><?php echo $data->category; ?></td>
						<td><?php echo $data->description; ?></td>
						<td><a href="edit.php?id=<?php echo $data->id; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $data->id; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Insert category:</h3>
		<form method="POST" action="insert.php">
			<table>
				<tr>
					<td>Category: </td>
					<td><input type="text" name="txtCategory"></td>
				</tr>
				<tr>
					<td>Description: </td>
					<td><input type="text" name="txtDescription"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="Insert category"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>