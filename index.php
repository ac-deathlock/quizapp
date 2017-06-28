<?php include("navbar.php");
if(isset($_SESSION["ID"]))
		{
			header('Location:home.php');
		}
?>
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
						$_SESSION["NAME"]=$result["name"];
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

	<div class="container">
	<h2>Welcome to Mock Quiz</h1>
	<h4>Please login or Register to Continue</h2>
		<div class="well">
  
		<form method="post">
		<table class="table table-striped table-hover">
			<tr>
				<td class="lead">Email:</td>
				<td><input class="form-control" type="email" name="email"/></td>
			</tr>
			<tr>
				<td class="lead">Password:</td>
				<td><input class="form-control" type="password" name="pass"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Login"/>   <input type="reset" value="Cancel"/></td>
				<td></td>
			</tr>
		</table>
		</form>
		<input type="button" value="Register" onclick="document.location.href='register.php';"/>
		</div>
	</div>
	</body>
</html>