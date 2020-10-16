<?php  
	$password = '1234';
	$user = 'root';
	$database= 'login';

	try {
		$bd = new PDO(
			'mysql:host=localhost;
			dbname='.$database,
			$user,
			$password,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $e) {
		echo "Error de conexión ".$e->getMessage();
	}

	$txtuser = $_POST['txtuser'];
	$txtpassword = $_POST['txtpassword'];
	$txtname = $_POST['txtname'];
	$txtlastName = $_POST['txtlastName'];

	$sentence = $bd->prepare("INSERT INTO users(user, password, name, lastName) VALUES (?,?,?,?);");
	$result = $sentence->execute([$txtuser,$txtpassword,$txtname,$txtlastName]);

	if ($result === TRUE) {
		
		header('Location: create.php');
		echo "created suscesfull";

	}else{
		echo "Error";
	}
?>