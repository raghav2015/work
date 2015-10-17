<? php 
	include("db/connect.php");
	if(!isset($_SESSION['visitor_id']))
	{
		$msg = 'Login Failed! Please make sure that you enter the correct details.';
		echo $msg;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login- Successful</title>
	</head>
	<body>
		<h1> Login - Successful </h1>
		<h3> Session Starts </h3>
		<a href="logout.php"  class="btn btn-dark btn-lg">Log Out</a>
	</body>
</html>