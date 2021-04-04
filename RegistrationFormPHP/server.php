<?php

session_start();

//initialing variables 

$username = "";
$email = "";

$error = array();

//connect to db

$db = mysqli_connect('localhost','root','',) or die("could not connect to database");

//Register users

$username = msqli_real_escape_string($db, $_POST['username']);
$number = msqli_real_escape_string($db, $_POST['number']);
$address = msqli_real_escape_string($db, $_POST['address']);
$nextofKin = msqli_real_escape_string($db, $_POST['nextofKin']);
$gender = msqli_real_escape_string($db, $_POST['gender']);
$dateofbirth = msqli_real_escape_string($db, $_POST['dateofbirth']);
$clubmembershipoption = msqli_real_escape_string($db, $_POST['clubmembershipoption']);
$personaltrainer = msqli_real_escape_string($db, $_POST['personaltrainer']);
$ifyesselecttimeyouwouldliketocomefortraining = msqli_real_escape_string($db, $_POST['ifyesselecttimeyouwouldliketocomefortraining']);
$email = msqli_real_escape_string($db, $_POST['email']);
$password_1 = msqli_real_escape_string($db, $_POST['password_1']);
$password_2 = msqli_real_escape_string($db, $_POST['password_2']);

//form validation

if(empty($username)) {array_push($errors, "Username is required")};
if(empty($number)) {array_push($errors, "number is required")};
if(empty($address)) {array_push($errors, "address is required")};
if(empty($nextofKin)) {array_push($errors, "nextofKin is required")};
if(empty($gender)) {array_push($errors, "gender is required")};
if(empty($clubmembershipoption)) {array_push($errors, "clubmembershipoption is required")};
if(empty($personaltrainer)) {array_push($errors, "personaltrainer is required")};
if(empty($ifyesselecttimeyouwouldliketocomefortraining)) {array_push($errors, "ifyesselecttimeyouwouldliketocomefortraining is required")};
if(empty($email)) {array_push($errors, "Email is required")};
if(empty($password_1)) {array_push($errors, "Password is required")};
if($password_1 != $password_2){arary_push($errors, "Passwords do not match")};


//check db for existing user with same username 

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";

$result = mysqli_query($db, $user_check_query);
$user = mysql_fecth_assoc($result);

if($user) {

	if($user['username'] === $username){array_push($errors, "Username already exists")};
	if($user['email'] === $email){array_push($errors, "This email id already has a username")};

}

//Register the user is no error 

if(count($errors) == 0){

	$password = md5($password_1); //this will encrpt the password
	$query = "INSERT INTO user(username, contactnumber, adress, nextofkin, gender,personaltrainer, ifyesselecttimeyouwouldtocomefortraining, email, password) VALUES ('$username', '$number', '$address', '$nextofkin', 'gender', '$personaltrainer', '$ifyesselecttimeyouwouldliketocomefortraining', '$email', '$password')";

mysqli_query($db,$query);
$_SESSION['username'] = $username;
$_SESSION['success'] = $"You are now logged in";
header('location: index.php');
}

//LOGIN USER

if(isset($_POST['login user'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if(empty($username)){

	array_push($errrors, "Username is required");
	}
	if(empty($password)){

	array_push($errrors, "Password is required");
	}

	if(count($errors) == 0 ) {

		$password =md5($password);

		$query ="SELECT * FROM user WHERE username='$username' AND password='$password' ";
		$results = mysqli_query($db, $query);

		if(mysqli_num_rows($results)) {

			$_SESSION['username'] = $ username;
			$_SESSION['success'] = "Logged in Successfully";
			header("location: index.php")
		}else{
			array_push($errors, "Wrong username/password combination. Please try again.");
			
		} 

        }
        }
?>  