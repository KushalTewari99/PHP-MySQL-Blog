<?php
session_start();
$servername = "mysql-server";
$username = "root";
$password = "secret";

try {
  $conn = new PDO("mysql:host=$servername;dbname=Blog", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connectiono failed: " . $e->getMessage();
}
