<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
  <title> Delice - Profile page </title>
  <link href='https://fonts.googleapis.com/css?family=Merriweather|Montserrat' rel='stylesheet' type='text/css'>
  <link href="css/main.css" rel="stylesheet">
  <link href="css/ray.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
  <body>
    <div class="background">
			<nav class="navbar navbar-inverse">
			    <div class="container-fluid">
			    	<div class="navbar-header">
			        	<a class="navbar-brand" href="index.php">Delice</a>
			    	</div>

			    	<ul class="nav navbar-nav">
			      		<li class="active"><a href="main.php">Home</a></li>
			      		<li><a href="#">Explore</a></li>
			    	</ul>

			    	<ul class="nav navbar-nav navbar-right">
			      		<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['profile'] ['username']; ?></a></li>
			      		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			    	</ul>

			  	</div>
        </div>
      <div class="bgregis">

    <form method="POST" action="changePass.php">
      <div class="formpad">

        <div class="pptitle" style="padding-top:20px;padding-bottom:35px;">
              <img style="margin-right:30px;" src="img/pp.jpeg" class="pp2"> <?php echo $_SESSION['profile']['username']?>
        </div>
        <input type="text" class="editProfile"  placeholder="Old Password" name="password" required><br><br>
        <input type="text" class="editProfile"  placeholder="New Password" name="newPassword" required><br><br>
        <input type="text" class="editProfile"  placeholder="Confirm Password" name="confirmPassword"required><br><br>

        <br><br><br>
        <input type="submit" class="testbtn3" value="Submit">
        <br><br>
        <!--
        <input type="password" class="register" placeholder ="Old Password" name="password"><br><br>
        <input type="password" class="register" placeholder ="New Password" ><br><br>
        <input type="password" class="register" placeholder ="Confirm Password" ><br><br>
        <input type="submit" class="testbtn3" value="Sign Up">
        -->

        <?php
        if(isset($_SESSION['error'])){
        ?>
        <div class="alert alert-danger">
        <?php
          echo $_SESSION['error'];
          unset($_SESSION['error']);
        }
        ?>

        </div>

    </form>

    <footer>

      <div class="logo">
        <a href="#"><img src="img/fb.png" class="soclogo"></a>
        <a href="#"><img src="img/twi.png" class="soclogo"></a>
        <a href="#"><img src="img/ins.png" class="soclogo"></a>
      </div>
      <div class="link">
        <a href="#" class="glink">Home</a>
        <a href="#" class="glink">Contact</a>
        <a href="#" class="glink">Explore</a>
        <a href="#" class="glink">Terms</a>
        <a href="#" class="glink">Privacy</a>
      </div>
    </footer>
  </body>
</html>
