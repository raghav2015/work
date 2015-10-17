<?php
include('db/connect.php');
session_start();
if(isset($_POST['submit']))
{
	$search=mysql_query("SELECT * FROM visitors WHERE email='".$_POST['mail']."' AND password='".$_POST['pswd']."'"); 
	$data=mysql_fetch_array($search);
	$_SESSION['visitor_id']=$data['visitor_id'];
	if(isset($_SESSION['visitor_id']))
	{
		header('location:loginSuccess.php');
	}

	else
	{
		$msg = 'Login Failed! Please make sure that you enter the correct details.';
		   echo $msg;
	}	
}
	
?>













