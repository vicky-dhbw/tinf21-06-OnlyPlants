<?php
session_start();
$_SESSION['currentPage']="index.php";
$_SESSION['plants_page']="php/plants.php";
$_SESSION['premiumContent_page']="php/premiumContent.php";
$_SESSION['contact_page']="php/contact.php";
$_SESSION['Logo']="assets/images/Logo.png";
$_SESSION['home_page']="index.php";
$_SESSION['signin_page']="php/signin.php";


include_once "php/configure.php"; ?>

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
<?php echo $_SESSION['sign-in-sign-out'];
echo "User: ".$_SESSION['user'];


?>

<!--This link has to be in the end of the body for bootstrap-->
</body>
</html>