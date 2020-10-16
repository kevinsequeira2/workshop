<?php
session_start();
?>

<html lang="en">
	<head>
		<title>Check Login and create session</title>
	</head>
	<body>
		<div>
		
			<?php
			// Connection info. file
			include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form login.html 
			$user = $_POST['user']; 
			$password = $_POST['password'];
			
			// Query sent to database
			$result = mysqli_query($conn, "SELECT user, password, name, lastName FROM users WHERE user = '$user'");
			
			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);
			
			// Variable $hash hold the password hash on database
			$hash = $row['password'];

			if ($_POST['password']) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['name'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				echo "Bienvenido <br>";
				echo " $row[name] $row[lastName]<br>";				
				echo "<p><a href='index.php'>Logout</a></p></div>";	
			
			} else {
				echo "<div>User or Password are incorrects!
				<p><a href='index.php'><strong>Please try again!</strong></a></p></div>";			
			}	
			?>
		</div>
	</body>
</html>