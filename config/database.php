<?php
$hostname = "localhost"; //Enter Your Host Name
$username = "root"; //Enter Your Table username
$password = ""; //Enter Your Table Password
$databasename = "admin_panel"; //Enter Your database name

$conn = new mysqli($hostname, $username,$password,$databasename);
//check conection

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
    
}

// Create database
#$sql = "CREATE DATABASE admin_panel";
#if ($conn->query($sql) === TRUE) {
 # echo "Database created successfully";
#} else {
 # echo "Error creating database: " . $conn->error;
#}

#$conn->close()

?>