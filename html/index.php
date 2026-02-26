<?php

$host = "db";
$user = "lab07user";
$password = "lab07pass";
$database = "lab07db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h1>LAB07 Docker Compose SUCCESS</h1>";
echo "<p>Connected to MySQL Database successfully!</p>";

$conn->close();
?>