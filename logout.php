<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');

unset($_SESSION['username']);
header('location: index.php');

?>