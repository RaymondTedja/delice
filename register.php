<!DOCTYPE html>
<html>
	<head>
		<title>
			Delice - Register Page
		</title>
		<link href='https://fonts.googleapis.com/css?family=Merriweather|Montserrat' rel='stylesheet' type='text/css'>
		<link href="css/main.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="header">        
        <ul>
          <li><a class="active" href="index.php">Delice</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </div>
      <div class="bgregis">
		<div class="title2" style="padding-top:50px;padding-bottom:5px;">
			<center> Register </center>
		</div>
		<hr>
		<form method="POST" action="reg.php">
			<div class="formpad">
				<input type="text" class="register" placeholder ="First Name"  name="firstname" required><br><br>
				<input type="text" class="register" placeholder ="Last Name" name="lastname"required><br><br>
				<input type="text" class="register" placeholder ="E-Mail Address" name="email"required><br><br>
				 Date of Birth:<br>
				<select name="date" class="register2" required>
			    	<option value="">Date</option>
			    	<?php 

					for($i=1; $i<=31; $i++)
						{
			    			echo "<option value=".$i.">".$i."</option>";
						}
					?> 
			    </select>
				<select name="month" class="register2" required>
			    	<option value="">Month</option>
			    	<?php
						$months = array("January", "February", "March","April","May", "June", "July","August","September", "November", "October","November","December");
						for($i=0; $i<=12; $i++)
							{
			    				echo "<option value=".$months[$i].">".$months[$i]."</option>";
							}
					?>
			  	</select>
				<select name="year" class="register2" required>
			    	<option value="">Year</option>
					<?php
			    	for($i=date("Y"); $i>= date("Y") - 200; $i--)
						{
			    			echo "<option value=".$i.">".$i."</option>";
						}
					?> 
			    	<option name="years"> </option>
			    </select>
			  	<br><br>
				 <input type="text" class="register" placeholder ="Username" name="username"required><br><br>
				 <input type="password" class="register" placeholder ="Password" name="password"required><br><br>
				<input type="password" class="register" placeholder ="Confirm Password" required><br><br>
				<input type="submit" class="testbtn3" value="Sign Up">
				</div>
		</form>	
	</body>
</html>