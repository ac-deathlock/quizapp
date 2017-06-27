<?php include("navbar.php")?>
<?php
//error_reporting(1);
	if($_SERVER["REQUEST_METHOD"]=="POST")
				{
					$username=$_POST["email"];
					$pass=$_POST["pass"];
					$query="select * from user where email='{$username}' and password='{$pass}';";
					//echo $query;
					$rs=mysqli_query($conn,$query);
					if($result=mysqli_fetch_array($rs))
					{
						$_SESSION["ID"]=$username;
						//echo $result;
						header('Location:home.php');
					}
					else
					{
						echo "<script>alert('Password doesn\'t match the given username')</script>";
					}
				}
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Quiz</title>
		</head>
	<body>
		<form method="post" name="login" action="">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login"/></td>
				<td><input type="reset" value="Cancel"/></td>
			</tr>
		</table>
		</form>
		<input type="button" value="Register" onclick="document.location.href='register.php';"/>
	</body>