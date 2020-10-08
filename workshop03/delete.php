<?php  
	if (!isset($_GET['id'])) {
		exit();
	}

	$code = $_GET['id'];
	include 'connection.php';
	$sentence = $bd->prepare("DELETE FROM categories WHERE id = ?;");
	$result = $sentence->execute([$code]);

	if ($result === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}

?>