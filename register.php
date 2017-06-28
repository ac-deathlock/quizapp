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
								$email=$_POST["email"];
								$pass=$_POST["pass"];
								$name=$_POST["name"];
								$query="insert into user(name, email, password) values('{$name}','{$email}','{$pass}');";
								echo $query;
								$rs=mysqli_query($conn,$query);
								if($rs)
								{
									$_SESSION["ID"]=$email;
									echo $result;
									header('Location:home.php');
								}
								else
								{
									echo "<script>alert('Please try again.')</script>";
								}
							}
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Quiz</title>
			<script type="text/javascript">
					function validate(){
						var pass1 = document.register.pass.value;
						var pass2 = document.register.cpass.value;
						if(pass1 != pass2){
							alert("passwords dont match");
							return false;
						}
					}
				</script>
		</head>
	<body>
	<div class="container">
	<h2>Register</h2>
		<div class="well">
		<form method="post" name="register" action="">
		<table class="table table-striped table-hover">
			<tr>
				<td class="lead">Email:</td>
				<td><input class="form-control" type="email" name="email"/></td>
			</tr>
			<tr>
				<td class="lead">Name:</td>
				<td><input class="form-control" type="text" name="name"/></td>
			</tr>
			<tr>
				<td class="lead">Password:</td>
				<td><input class="form-control" type="password" name="pass"/></td>
			</tr>
			<tr>
				<td class="lead">Confirm Password:</td>
				<td><input class="form-control" type="password" name="cpass"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Register"/>   <input type="reset" value="Clear"/></td>
				<td></td>
			</tr>
		</table>
		</form>
		<input type="button" value="Home" onclick="document.location.href='index.php';"/>
		</div>
		</div>
	</body>
</html>