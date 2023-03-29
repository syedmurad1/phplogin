<?php 
session_start(); // can be accessed from any page

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con); // To check if the user is logged in

?>

<!DOCTYPE html>
<html>
<head>
	<title>Syed's PHP Website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is Syed's first page</h1>
	<h2>Let's learn PHP<h2>

	<br>
	Howdy, <?php echo $user_data['user_name']; ?> 
</body>
</html>