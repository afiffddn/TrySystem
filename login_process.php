<?php
$email=$_POST['email'];
$pass=$_POST['pass'];

if($email=="test@gmail.com" && $pass=="test123")
{
	echo "Valid username and password";
}

else 
{
	echo "Invalid username or password";
}

?>