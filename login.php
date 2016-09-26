<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Delice - Login Page </title>
  <link href='https://fonts.googleapis.com/css?family=Merriweather|Montserrat' rel='stylesheet' type='text/css'>
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Delice</a>
          </div>

          <ul class="nav navbar-nav">
              <li><a href="#">Explore</a></li>
          </ul>

        </div>
    </nav>
  <div class="bglogin">
  <div class="title2" style="padding-top:50px;padding-bottom:5px;">
    <center> Login </center>
  </div>
  <form method="POST" action="log.php">
    <div class="formpad">
      <input type="text" class="login" placeholder ="Username" name="username" required>
      <br><br>
    	<input type="password" class="login" login placeholder ="Password" name="password" required>
      <br><br>
      <input type="submit" class="testbtn4" value="Login">
      <br>
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

  </div>
  </form>
</div>
</body>
</html>
