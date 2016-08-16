<?php
session_start();


?>
<head>

<title>
Register Form
</title>
<link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
<link href="css/main.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>

<body>
<div class="padbg">
	<div class="border">
		<div class="title1"><font color="black" size="7">Register Form</font></div>
<form method="POST" action="reg.php" onsubmit="return validatePassword">
<div class="form-group">
    <label for="exampleInputEmail1"><font color="black">Email address</font></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" required>
  </div>
 <div class="form-group">
    <label for="exampleInputPassword1"><font color="black">Password</font></label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><font color="black">Confirm Password</font></label>
    <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="password" required>
  </div>
  <input type="submit" class="btn btn-primary btn-lg">
  <div class="error">
  <?php
  if (isset($_SESSION['used'])){
    echo $_SESSION['used'];
    unset($_SESSION['used']);
}
    ?>
</div>
</form>
</div>
</div>	
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
