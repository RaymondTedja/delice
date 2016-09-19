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
    <div class="header">
        <ul>
          <li><a class="active" href="index.php">Delice</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </div>
      <div class="bgregis">

    <form method="POST" action="editProf.php">
      <div class="formpad">

        <div class="pptitle" style="padding-top:20px;padding-bottom:35px;">
              <img style="margin-right:30px;" src="img/pp.jpeg" class="pp2"> <?php echo $_SESSION['profile']['username']?>
        </div>
        <input type="text" class="editProfile" value=<?php echo $_SESSION['profile']['firstName']?> name="firstname" required><br><br>
        <input type="text" class="editProfile" value=<?php echo $_SESSION['profile']['lastName']?>  name="lastname" required><br><br>
        <input type="text" class="editProfile" value=<?php echo $_SESSION['profile']['email']?>  name="email"required><br><br>

        <textarea class="editProfile" rows="5" cols="50" name="bio" placeholder="Your magnificient Bio goes here " ></textarea>
        <br><br><br>
        <input type="submit" class="testbtn3" value="Submit">
        <br><br>
        <!--
        <input type="password" class="register" placeholder ="Old Password" name="password"><br><br>
        <input type="password" class="register" placeholder ="New Password" ><br><br>
        <input type="password" class="register" placeholder ="Confirm Password" ><br><br>
        <input type="submit" class="testbtn3" value="Sign Up">
        -->



        </div>
        <?php
          if(isset($_SESSION['used'])){
          echo $_SESSION['used'];
          unset($_SESSION['used']);
          }
          ?>
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
