<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'foodie');
$email = $_POST['email'];
$pass = md5($_POST['password']);

$query = "SELECT email from user where email = '$email'";
$result = mysqli_query($conn,$query);
if ($result && mysqli_num_rows($result) > 0)

    {
        $_SESSION['used'] = "Email is already used";
        header('location: register.php');
    }
else
    {
    	$sql = "INSERT INTO user (email, password)
		VALUES ('$email','$pass')";
		if ($conn->query($sql) === TRUE) 
		{
        $sql2 = "INSERT INTO userdata (id)
        VALUES ('$conn->insert_id;')";
        $conn ->query($sql2);
    	header('location:index.php');
		} 
		else 
		{
    	echo "Error: " . $sql . "<br>" . $conn->error;
		}
   	}
?>