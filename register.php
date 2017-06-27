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
		<form method="post" name="register" action="">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"/></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pass"/></td>
			</tr>
			<tr>
				<td>Confirm Password:</td>
				<td><input type="password" name="cpass"/></td>
			</tr>
			<tr>
				<td><input type="submit" value="Register"/></td>
				<td><input type="reset" value="Clear"/></td>
			</tr>
		</table>
		</form>
		<input type="button" value="Home" onclick="document.location.href='index.php';"/>
	</body>
</html>