<?php
session_start();
if(isset($_SESSION['sign-in-sign-out'])){
    $sign_in_sign_out=$_SESSION['sign-in-sign-out'];
    $user=$_SESSION['user'];
}
else{
    $sign_in_sign_out=0;
    $user="no user";
}
$Logo="../../assets/images/logo_.png";
$plants_page="../plants.php";
$premiumContent_page="../premiumContent.php";
$contact_page="../contact.php";
$home_page="../../index.php";
$signin_page="../signin.php";
$controlButtonPage='../controlButton.php';
$currentPage='imprint';
$admin_page="../adminPage.php";
$profile="../profile.php";
$imprint = "#";
$privacyPolicy ="privacyPolicy.php";
$termsOfUse ="termsOfUse.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imprint</title>
    <link rel="icon" href="../../favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/footer.css">
    <style>
        h1 {
            margin-top: 100px;
        }
    </style>
</head>

<body>

<?php include __DIR__ . '/../templates/nav.php' ; ?>


<div style="margin: 10%">
    <h1>Legal Notice</h1>
    <hr>
    <b>According to § 5 TMG</b> <br>
    <p>
        Name: OnlyPlants<br>
        Owner: Daniel Wierbicki<br>
        Schloß 2<br>
        97980 Bad Mergentheim<br>
        Germany</p>

    <b>Contact</b><br>
    <p>Phone: 07931 / 1230500<br>
        E-Mail: Only@Plants.de</p>

    VAT number according to §27a Umsatzsteuergesetz:
    DE287664832

</div>









<?php include __DIR__ . '/../templates/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>