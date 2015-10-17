<?php
	include('db/connect.php');
	if(isset($_POST['submit']))
	{
	$first=$_POST['fname'];
	$last=$_POST['lname'];
	$number=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	mysql_query('insert into visitors set firstname="'.$first.'", lastname="'.$last.'", contact="'.$number.'", email="'.$email.'", password="'.$password.'"');
				
				header('location:thanku.php');

	}
?>