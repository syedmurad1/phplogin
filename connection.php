<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "phplogin";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) # Variable con to connect
{

	die("Failed to connect!");
}
