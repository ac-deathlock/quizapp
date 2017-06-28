<?php include("navbar.php");
	if(!isset($_SESSION["ID"]))
		{
			header('Location:index.php');
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
	<body>
		<div class="container">
		<h1>Welcome to quizApp.Read the instructions carefully.</h1><br/>
		<ul>
			<li class="lead">Time is 5 min.</li>
			<li class="lead">Correct answer is 1 marks.</li>
			<li class="lead">All questions compulsory.</li>
			<li class="lead">No negative marking.</li>
			<li class="lead">All the best!</li>
		</ul>
		</p>
		<input type="button" value="Start quiz" onclick="document.location.href='quiz.php';"/>
		</div>
	</body>
</html>