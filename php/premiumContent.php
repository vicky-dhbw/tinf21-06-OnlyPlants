<?php
$Logo="../assets/images/Logo.png";
$plants_page="#";
$premiumContent_page="premiumContent.php";
$contact_page="contact.php";
$home_page="../index.php";
$signin_page="signin.php";
$controlButtonPage='controlButton.php';
$currentPage='premiumContent';
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
