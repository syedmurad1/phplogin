<?php 
session_start(); # 

// files you want to include
	include("connection.php"); 
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$pass = $_POST['pass'];

		if(!empty($user_name) && !empty($pass) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20); // see function
			$query = "insert into users (user_id,user_name,pass) values ('$user_id','$user_name','$pass')";

			mysqli_query($con, $query); // save

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
<h1>Let's learn PHP<h1>
	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: lightgrey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

			<h4>Username </h4>
			<input id="text" type="text" name="user_name"><br><br>
			<h4>Password </h4>
			<input id="text" type="pass" name="pass"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>