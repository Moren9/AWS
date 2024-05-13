<?php
$host='db'; 
$username='root'; 
$password = 'password'; 
$dbname = 'database';
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}