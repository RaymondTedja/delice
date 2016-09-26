<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$username = $_SESSION['profile']['username'];

$query = "SELECT * from t_customer where username = '$username'";
$result = mysqli_query($conn,$query);

if ($result && mysqli_num_rows($result) > 0)
    {
        $sql = " UPDATE t_customer
        SET firstName='$firstName', lastName='$lastName', email='$email'
        where username = '$username' ";

        if ($conn->query($sql) === TRUE)
    		{
          $result2 = mysqli_query($conn,$query);
          $row = mysqli_fetch_assoc($result2);
          $_SESSION['profile'] = $row;
        	   header('location:profile.php');
    		}
    		else
    		{
        	   echo "Error: " . $sql . "<br>" . $conn->error;
    		}
    }
?>
