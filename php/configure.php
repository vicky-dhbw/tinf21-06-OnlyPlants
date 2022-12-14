<?php
$servername = "localhost";
$username = "root";
$password = '';

$conn = new PDO("mysql:host=$servername", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE DATABASE IF NOT EXISTS OnlyPlants";
$conn->exec($sql);

$sql=null;

$conn = new PDO("mysql:host=$servername;dbname=OnlyPlants", $username, $password);
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS users(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  name VARCHAR(30) NOT NULL,
  email VARCHAR(30) NOT NULL,
  password VARCHAR(30) NOT NULL,
  type VARCHAR(30) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

$conn->exec($sql);

$email = "admin@admin.de";
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();
if (!$user) {
    $sql="INSERT INTO users(name,email,password,type) VALUES ('Admin','admin@admin.de','admin123','admin')";
    $conn->exec($sql);
}

$email = "user@user.de";
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();
if (!$user) {
    $sql="INSERT INTO users(name,email,password,type) VALUES ('User','user@user.de','user123','user')";
    $conn->exec($sql);
}

$sql = "CREATE TABLE IF NOT EXISTS plants(
  plantID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  id INT(6) NOT NULL,
  url VARCHAR(60) NOT NULL,
  name VARCHAR(30) NOT NULL,
  category VARCHAR(30) NOT NULL,
  type VARCHAR(30) NOT NULL,
  color VARCHAR(30) NOT NULL,
  height VARCHAR(30) NOT NULL,
  age VARCHAR(30) NOT NULL,
  isPremium INT(6),
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

$conn->exec($sql);








