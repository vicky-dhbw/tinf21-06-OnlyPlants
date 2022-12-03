<?php
session_start();
$_SESSION['currentPage']="index.php";
$_SESSION['plants_page']="php/plants.php";
$_SESSION['premiumContent_page']="php/premiumContent.php";
$_SESSION['contact_page']="php/contact.php";
$_SESSION['Logo']="assets/images/Logo.png";
$_SESSION['home_page']="index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyPlants</title>
    <!--<link rel="icon" href="favicon.png">-->
    <!--This link has to be in the head for bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php include __DIR__."/php/templates/header.php"; ?>

<h1>Home</h1>

<?php
//Verbindung zu phpMyAdmin herstellen:
$pdo = new PDO('mysql:host=localhost', 'root', '');
//SQL-Befehl, um Datenbank zu erstellen:
$sql = "CREATE DATABASE IF NOT EXISTS OnlyPlants;";
//SQL-Befehl ausführen:
$pdo->query($sql);


//Verbindung zur Datenbank herstellen:
$pdo = new PDO('mysql:host=localhost;dbname=OnlyPlants;charset=utf8', 'root', '');
//Tabelle erstellen:
$sql = "CREATE TABLE IF NOT EXISTS users (
  id int unsigned NOT NULL AUTO_INCREMENT,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  password varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  firstName varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  lastname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id), UNIQUE (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
//SQL-Befehl ausführen:
$pdo->query($sql);

//User einfügen:
$sql = "INSERT INTO users (email, password, firstName, lastname) 
    VALUES('admin@admin.de','Geheim#2022','Max','Mustermann')";
//SQL-Befehl ausführen:
$pdo->query($sql);

//Datenabfrage:
$sql = "SELECT email, firstName, lastname FROM users";
foreach ($pdo->query($sql) as $row) {
   echo $row['firstName']." ".$row['lastname']."<br>";
   echo "E-Mail: ".$row['email']."<br><br>";
}
/*
  'straße' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  'nr' int NOT NULL,
  'ort' varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  'plz' int NOT NULL,
  'Land' varchar(255) COLLATE utf8_unicode_ci NOT NULL,*/
?>


<!--This link has to be in the end of the body for bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>