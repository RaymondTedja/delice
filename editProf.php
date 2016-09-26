<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$bio = $_POST['bio'];
$username = $_SESSION['profile']['v_username'];

$query = "SELECT * from t_user where v_username = '$username'";
$result = mysqli_query($conn,$query);

if ($result && mysqli_num_rows($result) > 0)
    {
        $sql = " UPDATE t_user
        SET v_name='$name', v_email='$email', v_bio='$bio', v_address='$address'
        where v_username = '$username' ";

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
