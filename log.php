<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * from t_customer where username = '$username' and userPassword = '$password'";
$result = mysqli_query($conn,$query);
if ($result && mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login']= $row['username'];
        header('location: index.php');
    }
else
    {
    	$_SESSION['error'] = "Your username or password is wrong";
        header('location: login.php');
   	}
?>