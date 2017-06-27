<?php include("navbar.php");
	if(!isset($_SESSION["ID"]))
		{
			header('Location:index.php');
		}
?>
<?php
	$query = "select * from quiz";
	$result = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
		<head>
			<title>Quiz</title>
		</head>
		<script>
// Set the date we're counting down to
var countDownDate = new Date().getTime()+300000;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("login").submit();
  }
}, 1000);
</script>
	<body>
		<p id="demo"></p>
		<form method="post" id="login" name="login" action="submit.php">
		<?php
		$c=0;
		while ($show = mysqli_fetch_array($result)){
			
			echo '<div>
			<p>'.$show[1].' ?</p>
			<p>
			<input type="radio" name="ques'.$c.'" value="0" hidden="true" checked />
			<input type="radio" name="ques'.$c.'" value="a" required/>'.$show[2].'<br/>
			<input type="radio" name="ques'.$c.'" value="b"/>'.$show[3].'<br/>
			<input type="radio" name="ques'.$c.'" value="c"/>'.$show[4].'<br/>
			<input type="radio" name="ques'.$c.'" value="d"/>'.$show[5].'<br/>
			</p>
			</div><hr/>';
		$c++;
		}
		?>
		<input type="submit" value="Submit"/>
		</form>
	</body>
</html>