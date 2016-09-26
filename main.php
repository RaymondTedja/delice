<?php
session_start();

if(!isset($_SESSION['profile']))
{
	header('location: login.php');
}
?>
<html>
	<head>
	<title>
	Delice
	</title>
	<link href='https://fonts.googleapis.com/css?family=Merriweather|Montserrat' rel='stylesheet' type='text/css'>
	<link href="css/main.css" rel="stylesheet">
	<link href="css/ray.css" rel="stylesheet">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
								<li><a><span class="glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#addStoryModal"></span></a></li>
								<li><a><span class="glyphicon glyphicon-map-marker" data-toggle="modal" data-target="#checkInModal"></span></a></li>
								<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['profile']['username']; ?></a></li>
			      		<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
			    	</ul>

						<div id="addStoryModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h6 class="modal-title">So this happened..</h6>
									</div>

									<div class="modal-body">
										<a><span class="glyphicon glyphicon-plus-sign"></span> Let me show you pictures</a>

										<div class="form-group">
									  	<label for="comment">Description:</label>
									  	<textarea class="form-control" rows="5" id="comment">Please fix this. This is too hard coded</textarea>
										</div>

									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
									</div>

								</div>
							</div>
						</div>

						<div id="checkInModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">



									</div>
								</div>
							</div>
						</div>

			  	</div>
			</nav>

			<div class="padcon1">
				<div class="addContent">
					<img src="img/add.png">
					<img src="img/checkin.png">
				</div>
				<div class="maincontent">

					<div class="maintext">
						<img src="img/pp.jpeg" class="pp">
						<p class="username"><?php 
						echo $_SESSION['profile']['firstName'];
          				echo ' ' . $_SESSION['profile']['lastName']?></p>
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
						<p class="username"><?php 
						echo $_SESSION['profile']['firstName'];
          				echo ' ' . $_SESSION['profile']['lastName']?></p><p class="checkintext"> has checked in at Lestari Restaurant</p>
						<div style="style:clear"></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

