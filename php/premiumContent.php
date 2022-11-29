<?php
session_start();
$_SESSION['Logo']="../assets/images/Logo.png";
$_SESSION['plants_page']="plants.php";
$_SESSION['premiumContent_page']="premiumContent.php";
$_SESSION['contact_page']="contact.php";
$_SESSION['home_page']="../index.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include __DIR__.'/templates/header.php'; ?>
<h1>Premium Content</h1>
</body>
</html>
