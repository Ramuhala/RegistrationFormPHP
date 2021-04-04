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
		
		<form action="registration.php" method="post">

			<?php include('errors.php') ?>

		  
		   	<form> 
			<div class="input-group">
				
				<label for="username">Username : </label>
				<input type="username" name="username" required>

			</div>


			<form> 
			<div class="input-group">
				
				<label for="Contact">Contact Number: </label>
				<input type="Contact Number" name="Contact Number" required>

			</div>

			<form> 
			<div class="input-group">
				
				<label for="Address">Address : </label>
				<input type="Address" name="Address" required>

			</div>

			<form> 
			<div class="input-group">
				
				<label for="Next of Kin">Next of Kin : </label>
				<input type="Next of Kin" name="Next of Kin" required>

			</div>
            <div class="form-group">
            	<label for="gender">Gender</lable>
		    	<label for= "female" class="radio-inline">
		    	<input type="radio" name="gender" id="female">Female</label>
		   
		    </div>	
                
			<form> 
			<div class="input-group">
			<label for="Date of Birth">Date of Birth : </label>
			<input type="Date of Birth" name="Date of Birth" required>

			</div>  
			 <div class="form-group">
            	<label for="club membership option"> Club memebership option</label>

		    	<label for= "junior" class="radio-inline"><input type="radio" name="Club memebership option" id="junior">Junior</label>
		        <label for= "beginner" class="radio-inline"><input type="radio" name="Club memebership option" id="beginner">Beginer</label>
		        <label for= "advanced" class="radio-inline"><input type="radio" name="Club memebership option" id="advanced">Advanced</label><label for= "professional" class="radio-inline"><input type="radio" name="Club memebership option" id="professional">Professional</label>
		   
		    </div>	
		    	<div class="form-group">
            	<label for="personal trainer"> personal trainer</label>

		    	<label for= "yes" class="radio-inline"><input type="radio" name="personal trainer" id="yes">Yes</label>
		    	<label for= "no" class="radio-inline"><input type="radio" name="personal trainer" id="no">No</label>
		   
		    </div>	
		     <div class="form-group">
            	<label for="if yes select time you would like to come for training"> if yes select time you would like to come for training</label>

		    	<label for= "08.00am-10.00am" class="radio-inline"><input type="radio" name="if yes select time you would like to come for training" id="08.08am-10am">08.08am-10am</label>
		        <label for= "11.00am-12.00pm" class="radio-inline"><input type="radio" name="if yes select time you would like to come for training" id="11.00am-12.00pm">11.00am-12.00pm</label>
		        <label for= "13.00pm-14.00pm" class="radio-inline"><input type="radio" name="if yes select time you would like to come for training" id="13.00pm-14.00pm">13.00pm-14.00pm</label>
		        <label for= "14.00pm-15.00pm" class="radio-inline"><input type="radio" name="if yes select time you would like to come for training" id="14.00pm-15.00pm">14.00pm-15.00pm</label>
		   
		    </div>
      

				<form> 
			    <div class="input-group">
				<label for="email">Email : </label>
				<input type="email" name="email" required>

			</div>


			<form> 
			<div class="input-group">
				
				<label for="password">Password : </label>
				<input type="password" name="password_1" required>

			</div>

			<form> 
			<div class="input-group">
				
				<label for="password">Comfirm Password : </label>
				<input type="password" name="password_2" required>

			</div>

			<button type="submit" name="reg_user"> Submit </button>
  
			<p>Already a user<a href="login.php"><b>Log in</b></a></p>
		</form>
			
	</div>

</body>
</html>