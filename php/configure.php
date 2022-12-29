<?php
/*
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
  isPremium tinyint(1) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";

$conn->exec($sql);

$email = "admin@admin.de";
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();
if (!$user) {
    $sql="INSERT INTO users(name,email,password,type,isPremium) VALUES ('Admin','admin@admin.de','admin123','admin',1)";
    $conn->exec($sql);
}

$email = "user@user.de";
$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();
if (!$user) {
    $sql="INSERT INTO users(name,email,password,type,isPremium) VALUES ('User','user@user.de','user123','user',0)";
    $conn->exec($sql);
}
$sql="CREATE TABLE IF NOT EXISTS plants(
  id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  userid INT(6) NOT NULL,
  username varchar(30) NOT NULL,
  name varchar(30) NOT NULL,
  type varchar(30) NOT NULL,
  category varchar(30) NOT NULL,
  color varchar(30) NOT NULL,
  age int(11) NOT NULL,
  height int(11) NOT NULL,
  url varchar(60) NOT NULL,
  isPremium tinyint(1) NOT NULL,
  likes int(11) NULL,
  views int(11) NULL,
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";


$conn->exec($sql);


$sql="CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plantID` int(11) NOT NULL,
  `commenter` varchar(30) NOT NULL,
  `commenterID` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$conn->exec($sql);

/*
$sql="insert into plants(userid,username,name,type,category,color,age,height,url,isPremium)
values(1,'Admin','Venus flytrap','cactus-succulents','wild plants','green',120,10,'../assets/images/venusFlytrap.jpeg',0)";

$conn->exec($sql);*/









