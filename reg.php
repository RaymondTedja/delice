<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$fullname = $firstName . " " . $lastName;
$email = $_POST['email'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$dob = $date . " " . $month . " " . $year;
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT v_username from t_user where v_username = '$username'";
$result = mysqli_query($conn,$query);
if ($result && mysqli_num_rows($result) > 0)

    {
        $_SESSION['used'] = "Username is already used";
        header('location: register.php');
    }
else
    {
    	$sql = "INSERT INTO t_user (v_username, v_Password, v_name, v_email, v_dob)
		VALUES ('$username','$password', '$fullname', '$email', '$dob')";
		if ($conn->query($sql) === TRUE)
		{
    	   header('location:index.php');
		}
		else
		{
    	   echo "Error: " . $sql . "<br>" . $conn->error;
		}
   	}
?>
