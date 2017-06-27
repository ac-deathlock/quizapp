<?php
  $conn = mysqli_connect("localhost","root","","quizapp");
  session_start();
?>
<link rel="stylesheet" type="text/css" href="http://bootswatch.com/yeti/bootstrap.min.css"></link>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <a class="navbar-brand" href="#">Mock Quiz</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">

        
        <?php 
        if (isset($_SESSION['ID']))
        {
          echo '<li><a href="logout.php">Logout</a></li>';
          echo ' '.$_SESSION['ID']; 
        }
        else
        {
          echo '<li><a href="index.php">LogIn</a></li>
                <li><a href="register.php">Register</a></li>';
        }

        ?>
       
      </ul>
    </div>
  </div>
</nav>