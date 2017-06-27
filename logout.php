<?php
	include 'navbar.php';
?>
<?php
	session_destroy();
	header('Location:index.php');
?>