<?php
session_start();
$_SESSION['currentPage']="index.php";
$_SESSION['plants_page']="php/plants.php";
$_SESSION['premiumContent_page']="php/premiumContent.php";
$_SESSION['contact_page']="php/contact.php";
$_SESSION['Logo']="assets/images/Logo.png";
$_SESSION['home_page']="index.php";
$_SESSION['signin_page']="php/signin.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php include __DIR__."/php/templates/header.php"; ?>

<h1>Home</h1>

<?php include "php/configure.php"?>

<!--This link has to be in the end of the body for bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>