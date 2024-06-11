<?php 

$host = "localhost";
$user = "root";
$pass = "1234";
$db   = "cee_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>