<html lang="en">
  <head>
    <title>Create</title>
	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>

	<form action='createUser.php' method='POST'>                           	
		<div>									
			<input type='text' name='txtuser' placeholder='user'>        
		</div>							
		<div>        
			<input type='text' name='txtpassword' placeholder='password' >       
		</div>		
		<div>        
			<input type='text' name='txtname' placeholder='name' >       
		</div>		
		<div>        
			<input type='text' name='txtlastName' placeholder='lastName' >       
		</div>			    
			<button type='submit'>create</button>
		</form>	

		<a href="index.php">logout</a>
	</body>
</html>	
