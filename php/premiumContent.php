<?php
session_start();
$_SESSION['Logo']="../assets/images/Logo.png";
$_SESSION['plants_page']="plants.php";
$_SESSION['premiumContent_page']="#";
$_SESSION['contact_page']="contact.php";
$_SESSION['home_page']="../index.php";
$_SESSION['signin_page']="signin.php";
$_SESSION['controlButtonPage']='controlButton.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="../favicon.png">
</head>
<body>
<?php include __DIR__.'/templates/header.php'; ?>
<h1>Premium Content</h1>
<?php
echo "STATUS: ".$_SESSION['sign-in-sign-out']."<br>";
echo "USER: ".$_SESSION['user']."<br>";
echo "USER ".$_SESSION['is_signed_in'];

?>
</body>
</html>
