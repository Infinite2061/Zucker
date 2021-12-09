<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbstudents";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($connect, "SELECT * FROM Students WHERE email='" . $email . "' AND password='" . $password . "'");
if (mysqli_num_rows($result) !== 0) {
    echo $result;
} else {
    echo "input exactly";
}
