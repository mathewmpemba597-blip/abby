<?php
$host = 'localhost';
$user = 'mathew14';   // Your MySQL username from earlier setup
$pass = '12345';           // Put your password here if you set one, otherwise leave blank
$dbname = 'addy_db';

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
