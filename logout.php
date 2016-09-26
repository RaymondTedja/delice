<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'delice');

unset($_SESSION['profile']);
header('location: index.php');

?>