<?php 
session_start();
?>

<html>
	<head>
	<title>
	Delice
	</title>
	<link href='https://fonts.googleapis.com/css?family=Merriweather|Montserrat' rel='stylesheet' type='text/css'>
	<link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>

		<div class="mainbackground">
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
			      		<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a></li>
			      		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			    	</ul>

			  	</div>
			</nav>

			<div class="padcon1">
				<div class="maincontent">

					<div class="maintext">
						<img src="img/pp.jpeg" class="pp">
						<p class="username">RaisaAndriana</p>
					</div>

					<img src="img/b8.jpg" class="pmain">
					<div class="maintext">
						<p class="like">24 like</p>
					</div>
					<div class="maintext">
						This is an ice-cream
					</div>
					<div class="maintext">
						Comment:
					</div>
				</div>

				<div class="maincheckin">
					<div class="maintext">
						<img src="img/pp.jpeg" class="pp">
						<p class="username">RaisaAndriana</p><p class="checkintext"> has checked in at Lestari Restaurant</p>
						<div style="style:clear"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>