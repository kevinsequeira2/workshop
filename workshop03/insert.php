<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'connection.php';
	$category = $_POST['txtCategory'];
	$description = $_POST['txtDescription'];

	$sentence = $bd->prepare("INSERT INTO categories(category,description) VALUES (?,?);");
	$result = $sentence->execute([$category,$description]);

	if ($result === TRUE) {
		
		header('Location: index.php');

	}else{
		echo "Error";
	}
?>