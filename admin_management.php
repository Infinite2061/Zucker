<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbstudents";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, " DELETE FROM Students");
echo $result;
