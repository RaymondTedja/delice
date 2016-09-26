<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
  <title> Delice - Profile page </title>
  <link href='https://fonts.googleapis.com/css?family=Merriweather|Montserrat' rel='stylesheet' type='text/css'>
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
  <body>
    <div>
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
        </nav>
      </div>
    <div class="bgprofile">
      <div class="padprofile">
        <img src="img/pp.jpeg" class="pp">
        <div class="ppname">
          <?php echo $_SESSION['profile']['firstName']?>
          <?php echo ' ' . $_SESSION['profile']['lastName']?>
          <a href="editprofile.php" class="buttonEdit">Edit Profile</a>
        </div>
        <div class="bio">
          <?php echo 'Hi, my name is ' . $_SESSION['profile']['firstName']?>
        </div>
        <div class="biopost">
          <div class="bios">
            23 Stories
          </div>
          <div class="bios">
            10 Following
          </div>
          <div class="bios">
            34k Followers
          </div>
        </div>
        <div style="style:clear">
      </div>
    </div>
    <div class="bgcontent">
      <div class="padcon1">
        <div class="img-fluid">
            <div class="row">
              <div>
                <img src="img/b2.jpg" class="p1">
              </div>
              <div>
                <img src="img/b3.jpg" class="p1">
              </div>
              <div>
                <img src="img/b4.jpg" class="p1">
              </div>
              <div>
                <img src="img/b5.jpg" class="p1">
              </div>
              <div>
                <img src="img/b6.jpg" class="p1">
              </div>
              <div>
                <img src="img/b7.jpg" class="p1">
            </div>
            <div style="style:clear">
          </div>
        </div>
      </div>
    </div>

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
