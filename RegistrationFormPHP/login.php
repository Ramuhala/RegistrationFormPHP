<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="container">

		<div class="header">
			
			<h2>Register</h2>

		</div>

        <form action="login.php" method="post">

        	
            <form> 
            <div class="input-group">
            	
                <label for="username">Username : </label>
                <input type="text" name="username" required>

            </div>

            <form> 
            <div class="input-group">
            	
                <label for="password">Password : </label>
                <input type="password" name="password_1" required>

            </div>

            <button type="submit" name="login_user"> Log In </button>
  
            <p>Not a user<a href="Register.php"><b>Register Here</b></a></p>
        </form>
    		
    </div>

</body>
</html>