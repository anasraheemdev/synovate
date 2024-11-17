<?php
$name = $_POST['name'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];



// connection between the SQL and PHP

$connection = mysqli_connect("localhost","root","","synovate") or die();

$insert = "INSERT INTO clients (name,email,project,message) VALUES ('{$name}','{$email}','{$project}','{$message}')";

mysqli_query($connection,$insert);
header("http://localhost:3000/index.php");

?>