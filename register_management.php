<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "CREATE DATABASE dbstudents");
$result = mysqli_query($conn, "CREATE TABLE dbstudents.Students(
    id int Primary Key AUTO_INCREMENT, 
    firstname varchar(100) not null, 
    lastname varchar(100) not null,
    username varchar(100) not null,
    email varchar(100) not null,
    password varchar(100) not null)");
$result = mysqli_query($conn, "INSERT INTO dbstudents.Students (firstname, lastname, username, email, password) VALUES ('" . $firstname . "','" . $lastname . "', '" . $username . "', '" . $email . "', '" . $password . "');");
