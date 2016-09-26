<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');
$password = md5($_POST['password']);
$newPassword = md5($_POST['newPassword']);
$confirmPassword = md5($_POST['confirmPassword']);
$username = $_SESSION['profile']['username'];

$query = "SELECT * from t_customer where username = '$username' and userPassword = '$password'";
$result = mysqli_query($conn,$query);


if ($result && mysqli_num_rows($result) > 0)
    {
        if($newPassword == $confirmPassword)
        {
            $sql = " UPDATE t_customer
            SET userPassword='$newPassword'
            where username = '$username' ";

            $result2 = mysqli_query($conn,$sql);
                $row = mysqli_query($query);
                $_SESSION['profile'] = $row;
                   header('location:profile.php');
        }
        else
        {
            $_SESSION['error'] = "Error: confirmed password is not the same";
            header('location:changePassword.php');
        }
    }
    else
    {
        $_SESSION['error'] = "Error: wrong password";
        header('location:changePassword.php');
    }
?>
