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
	<div class="container">
		<div class="panel panel-success">
		  <div class="panel-heading">
		    <h3 class="panel-title">Panel success</h3>
		  </div>
		  <div class="panel-body">
			    <table class="table table-striped table-hover">
				<tr>
					<td class="lead">Email:</td>
					<td class="lead"><?php echo $_SESSION["ID"];?></td>
				</tr>
				<tr>
					<td class="lead">Name:</td>
					<td class="lead"><?php echo $_SESSION["NAME"];?></td>
				</tr>
				<tr>
					<td class="lead">Correct:</td>
					<td class="lead"><?php echo $cor;?></td>
				</tr>
				<tr>
					<td class="lead">Wrong:</td>
					<td class="lead"><?php echo $wrng;?></td>
				</tr>
				<tr>
					<td class="lead">Total:</td>
					<td class="lead"><?php echo $cor;?></td>
				</tr>
			  </table>
		  </div>
		</div>
	</div>

		
	</body>
	<script>
	history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});
	</script>
</html>