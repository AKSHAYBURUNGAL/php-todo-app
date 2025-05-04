<?php
// Use the Kubernetes Service name instead of localhost
$host = "mysql-service";  // Must match your MySQL Service name
$user = "root";
$password = "1122";  // Must match MYSQL_ROOT_PASSWORD
$dbname = "todo_app";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
