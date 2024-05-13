<?php 
session_start();
require 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$accedi = "SELECT * FROM utente WHERE username = '$username' AND password = '$password'";
if($conn->query($accedi)->num_rows>0){
    header("Location: site.html");
    exit();
}