<!DOCTYPE html>
<html>
	<head>
		<title>Buzz Around Sign Up</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="signup.css">
		<img src="buzz_logo.png" alt="Buzz Around logo" class="center">
	</head>
	<body>
	<form action="signup.php" method="post">
		<label for="fname">First Name:</label>
		<input type="text" id="fname" name="fname"><br>
		
		<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname"><br>

		  <label for="email">Email:</label>
		  <input type="email" id="email" name="email"><br>

		  <label for="pass">Password:</label>
		  <input type="password" id="pass" name="pass"><br>

		<label for="account_type">Account Type:</label>
		  <select id="account_type" name="account_type">
			<option value="user">User</option>
			<option value="business">Business</option>
		  </select><br>
		
		  <label for="dob">Date of Birth:</label>
		  <input type="date" id="dob" name="dob"><br>
		<input type="submit" name="submit" value="Register">
	</body>
</html

<?php
// Connect to the database
require ('mysqli_connect.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];
$account_type = $_POST['account_type'];

// Insert form data into database
$signup = "INSERT INTO users (fname, lname, email, pass, dob, account_type) VALUES ('$fname', '$lname', '$email', '$pass', '$dob', '$account_type')";
$r = @mysqli_query ($dbc, $signup);
/*
if (mysqli_query($dbc)) {
  echo "Sign up successful";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
}
*/
// Close database connection
mysqli_close($dbc);
}
?>
