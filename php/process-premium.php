<?php
$servername = "localhost";
$username = "root";
$password = '';

$iban=$_POST["iban"];

session_start();
if(isset($_SESSION['sign-in-sign-out'])) {
    $currentUserID = $_SESSION['id'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=OnlyPlants", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $sql="UPDATE users SET isPremium = 1, iban = '$iban' WHERE id = $currentUserID";
    $conn->exec($sql);
}


header("Location: premiumContent.php");









