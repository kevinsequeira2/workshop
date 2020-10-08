<?php 
	
	if (!isset($_POST['oculto'])) {
		header('Location: index.php');
	}

	include 'connection.php';
	$id2 = $_POST['id2'];
	$category = $_POST['txt2Category'];
	$description = $_POST['txt2Description'];

	$sentence = $bd->prepare("UPDATE categories SET category = ?, description = ? WHERE id = ?;");
	$result = $sentence->execute([$category,$description, $id2]);

	if ($result === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>