<?php  
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}
	
	include 'connection.php';
	$id = $_GET['id'];

	$sentence = $bd->prepare("SELECT * FROM categories WHERE id = ?;");
	$sentence->execute([$id]);
	$category = $sentence->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Category</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Edit category:</h3>
		<form method="POST" action="editProcess.php">
			<table>
				<tr>
					<td>id: </td>
					<td><input type="text" name="txt2Id" value="<?php echo $category->id; ?>"></td>
				</tr>
				<tr>
					<td>category: </td>
					<td><input type="text" name="txt2Category" value="<?php echo $category->category; ?>"></td>
				</tr>
				<tr>
					<td>description: </td>
					<td><input type="text" name="txt2Description" value="<?php echo $category->description; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $category->id; ?>">
					<td colspan="2"><input type="submit" value="EDIT CATEGORY"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>