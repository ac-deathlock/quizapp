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
		<p>Welcome to quizApp.Read the instructions carefully.<br/>
		<ul>
			<li>Time is 5 min.</li>
			<li>Correct answer is 1 marks.</li>
			<li>All questions compulsory.</li>
			<li>No negative marking.</li>
			<li>All the best!</li>
		</ul>
		</p>
		<input type="button" value="Start quiz" onclick="document.location.href='quiz.php';"/>
	</body>
</html>