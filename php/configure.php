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
  isPremium tinyint(1) NOT NULL,
  iban VARCHAR(22) NOT NULL,
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
  created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
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

$sql="CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plantID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  added TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

$conn->exec($sql);
$conn=NULL;


include "connection.php";
$sql1="select * from users where name='Admin' and type='admin'";
$result1= mysqli_query($connection,$sql1);
$data1=mysqli_fetch_assoc($result1);
$user=$data1['id'];

$sql="select * from plants where username='Admin' and name='Venus flytrap' and height=2";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Venus flytrap";
    $type='cactus-succulents';
    $category='wild plants';
    $color='green';
    $age=120;
    $height=2;
    $image='../assets/images/venus.jpg';
    $isPremium=0;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

$sql="select * from plants where username='Admin' and name='Cactus' and height=3";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Cactus";
    $type='cactus-succulents';
    $category='wild plants';
    $color='mixed';
    $age=280;
    $height=3;
    $image='../assets/images/cactus_.jpg';
    $isPremium=0;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

$sql="select * from plants where username='Admin' and name='Wheat' and height=8";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Wheat";
    $type='annuals';
    $category='none';
    $color='yellow';
    $age=30;
    $height=8;
    $image='../assets/images/wheat.jpg';
    $isPremium=0;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

$sql="select * from plants where username='Admin' and name='Weed' and height=5";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Weed";
    $type='herbs';
    $category='none';
    $color='green';
    $age=120;
    $height=5;
    $image='../assets/images/weed.jpg';
    $isPremium=1;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

$sql="select * from plants where username='Admin' and name='Coconut' and height=200";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Coconut";
    $type='trees';
    $category='none';
    $color='green';
    $age=800;
    $height=200;
    $image='../assets/images/coconut.jpg';
    $isPremium=1;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

$sql="select * from plants where username='Admin' and name='Sunflower' and height=10";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Sunflower";
    $type='shrubs';
    $category='summer flowers';
    $color='yellow';
    $age=15;
    $height=10;
    $image='../assets/images/sunflower.jpeg';
    $isPremium=0;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}


$sql="select * from plants where username='Admin' and name='Hibiscus' and height=3";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Hibiscus";
    $type='orchids';
    $category='indoor plants';
    $color='yellow';
    $age=172;
    $height=3;
    $image='../assets/images/hib.jpeg';
    $isPremium=1;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}


$sql="select * from plants where username='Admin' and name='Mangrove' and height=60";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Mangrove";
    $type='perennials';
    $category='medicinal plants';
    $color='mixed';
    $age=630;
    $height=60;
    $image='../assets/images/mangrove.jpg';
    $isPremium=1;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

$sql="select * from plants where username='Admin' and name='Giant redwood' and height=91";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Giant redwood";
    $type='trees';
    $category='medicinal plants';
    $color='mixed';
    $age=800;
    $height=91;
    $image='../assets/images/redwood.jpg';
    $isPremium=0;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}


$sql="select * from plants where username='Admin' and name='Pampas grass' and height=10";
$result= mysqli_query($connection,$sql);
$data=mysqli_fetch_assoc($result);

if($data['id']==NULL){
    $username='Admin';
    $name="Pampas grass";
    $type='ornamental grasses';
    $category='summer flowers';
    $color='white';
    $age=64;
    $height=10;
    $image='../assets/images/pampas.jpg';
    $isPremium=1;

    $sql2= "insert into plants(userid,username,name,type,category,color,age,height,url,isPremium) values ('$user','$username','$name','$type','$category','$color','$age','$height','$image','$isPremium')";
    $result2= mysqli_query($connection,$sql2);
}

