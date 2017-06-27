<?php include("navbar.php");
	if(!isset($_SESSION["ID"]))
		{
			header('Location:index.php');
		}
?>
<?php
	$query = "select * from quiz";
	$result = mysqli_query($conn,$query);
	$ans=array();
	$c=0;
	$cor=0;
	$wrng=0;
	while(isset($_POST["ques".$c]))
	{
		array_push($ans,$_POST["ques".$c]);
		$c++;
	}
	$n=$c;
	while ($show = mysqli_fetch_array($result)){
		if($ans[$show[0]-1]==$show[6])
			$cor++;
		else
			$wrng++;
	}
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Quiz</title>
		</head>
	<body>
		<table>
			<tr>
				<td>Email:</td>
				<td><?php echo $_SESSION["ID"];?></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><?php echo $_SESSION["NAME"];?></td>
			</tr>
			<tr>
				<td>Correct:</td>
				<td><?php echo $cor;?></td>
			</tr>
			<tr>
				<td>Wrong:</td>
				<td><?php echo $wrng;?></td>
			</tr>
			<tr>
				<td>Total:</td>
				<td><?php echo $cor;?></td>
			</tr>
		</table>
	</body>
	<script>
	history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
	</script>
</html>