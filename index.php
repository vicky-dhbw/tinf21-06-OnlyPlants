<?php
session_start();

require "php/configure.php";
$plants_page="php/plants.php";
$premiumContent_page="php/premiumContent.php";
$contact_page="php/contact.php";
$Logo="assets/images/Logo.png";
$home_page="#";
$signin_page="php/signin.php";
$controlButtonPage='php/controlButton.php';
$currentPage='index';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyPlants</title>
    <link rel="icon" href="favicon.png">
    <!--This link has to be in the head for bootstrap-->
</head>
<body>
<?php include __DIR__."/php/templates/header.php"; ?>
<h1>Home</h1>
<?php session_start();
echo "STATUS: ".$_SESSION['sign-in-sign-out']."<br>";
echo "USER: ".$_SESSION['user']."<br>";
echo "USER ".$_SESSION['is_signed_in'];
echo session_id();
?>

</body>
</html>